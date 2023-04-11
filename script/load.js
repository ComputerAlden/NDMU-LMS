document.onreadystatechange = function () {
    var loadingScreen = document.getElementById("loading-screen");
    if (document.readyState !== "complete") {
      loadingScreen.style.display = "flex";
    } else {
      loadingScreen.style.display = "none";
    }
  };
  