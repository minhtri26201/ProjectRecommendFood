<?php
    session_start();
    ob_start();
    
    include "lib/db.php";
    include "view/header.php";
    include "model/category.php";
    switch($_GET['act'] ?? '') {
        case 'about' :
            include "view/about.php";
            break;
        case 'login' :
            if(isset($_POST['login']) ) {
                $user = $username = $_POST['username'];
                $pass = $_POST['password'];

                $user = $DB->get_row("SELECT * FROM `tbl_customer` WHERE user = '$user' AND pass = '$pass'");
                if( $user ){
                    $role = $user['role'];
                if ($role==1){
                    $_SESSION['role'] = $role;
                    $_SESSION['username'] = $username;
                    header('location: admin/index.php' );
                }else {
                    $_SESSION['role'] = $role;
                    $_SESSION['username'] = $username;
                    header('location: index.php' );
                    break;
                    
                }
                    exit;
                } else {
                    ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'error',
    title: 'Notice',
    text: 'Incorrect account or password'
})

setTimeout(() => {
    window.location = '/index.php?act=dangnhap';
}, 2000);
</script>
<?php
                    
                }



                // $role = getuserinfo($user, $pass);
                // $role=$kq[0]['role'];
                // if ($role==1){
                //     $_SESSION['role'] = $role;
                //     header('location: admin/index.php' );
                // }else {
                //     $_SESSION['role'] = $role;
                //     $_SESSION['iduser'] = $kq[0]['customerID'];
                //     $_SESSION['user'] = $kq[0]['user'];
                //     header('location: index.php' );
                //     break;
                    
                // }
            }
            case 'register' :
                // echo 12123123123213213;
                if(isset($_POST['register'])) {
                    // echo 99999;
                    $fullname = $_POST['fullname'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    // $user = $DB->get_row("SELECT * FROM `tbl_customer` WHERE user = '$$username' AND pass = '$password'");
                    // $user = $DB->get_row("SELECT * FROM `tbl_customer` WHERE 'user' = '$username'");
                    // if
                    //     header("Location: /login.php?error= tai khoan da co nguoi tao truoc");
                    //     exit();


                    if( empty($fullname) ){
                        $_SESSION['name_error'] = 'cannot be left blank';
                        header('location: index.php?act=dangky');
                        exit;
                    }

                    if( empty($username) ){
                        $_SESSION['username_error'] = 'cannot be left blank';
                        header('location: index.php?act=dangky');
                        exit;
                    }
                    if( empty($password) ){
                        $_SESSION['password_error'] = 'cannot be left blank';
                        header('location: index.php?act=dangky');
                        exit;
                    
                       }


                    if( $DB->num_rows("SELECT * FROM `tbl_customer`  WHERE user='$username'") >=1)
                    {
                        $_SESSION['username_error'] = 'username da ton tai';
                        header('location: index.php?act=dangky');

                     exit;
                    }

                    
                    if( $DB->insert(
                        '`tbl_customer`',
                        [
                            'customerName' => $fullname,
                            'user' => $username,
                            'pass' =>  $password,
                            'customerPhone' => $phone,
                            'customerEmail' => $email
                        ]
                    ) ){
                        ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    icon: 'success',
    title: 'Notice',
    text: 'Registered successfully!'
})
</script>
<?php
                                                }

                    $data = [
                        'username' => $username,
                        'password' => $password,
                        'phone' => $phone,
                        'email' => $email,
                        'name' => $fullname
                    ];


                    ?>

<?php
                    
                }
                break;
        case 'dangnhap':
            include "view/login.php";
            break;
        case 'dangky':
            require "view/register.php";
            break;
        default:
            include "view/home.php";
            break;
    }
    include "view/footer.php";
?>