var locate = false;

function getLocate(callback) {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(callback);
  } else {
    return "Geolocation is not supported by this browser.";
  }
}

getLocate((l) => {
  locate = l;
});
