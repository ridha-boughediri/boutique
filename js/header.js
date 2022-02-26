$(".account").click(function () {
  $(".account-container").toggleClass("hover");
});

$(".account-container-close").click(function () {
  $(".account-container").toggleClass("hover");
});

$(".logo-container").click(function () {
  window.location = "./index.php";
});

$(".register").click(function () {
  window.location = "./sign-up.php";
});

$(".connect").click(function () {
  window.location = "./sign-in.php";
});
