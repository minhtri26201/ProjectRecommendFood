<?php
    $filepath = realpath(dirname(__FILE__));
    include (__DIR__.'/../config/config.php');
?>
<?php
    class Database {
        public $db_host = "localhost";
        public $db_user = "root";
        public $db_pass = "password";
        public $db_name = "database_pjvutri";

        public $link;
        public $error;

        public function __construct() {
            $this->connectDB();
        }

        private function connectDB() {
            $this->link = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            mysqli_set_charset($this->link, "utf8mb4");
            if (!$this->link) {
                $this->error = "Connection failed: " . $this->link->connect_error;
                return false;
            }
        }

        public function insert($query) {
            $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
            return $insert_row ? $insert_row : false;
        }

        public function select($query) {
            $result = $this->link->query($query) or die($this->link->error.__LINE__);
            return ($result->num_rows > 0) ? $result : false;
        }

        public function delete($query) {
            $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
            return $delete_row ? $delete_row : false;
        }

        public function update($query) {
            $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
            return $update_row ? $update_row : false;
        }
    }
?>