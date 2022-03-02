$(".account").click(function () {
  $(".account-container").toggleClass("hover");
});

$(".account-container-close").click(function () {
  $(".account-container").toggleClass("hover");
});

$(".bag").click(function () {
  $(".bag-container").toggleClass("hover");
});

$(".bag-container-close").click(function () {
  $(".bag-container").toggleClass("hover");
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

$(".myaccount").click(function () {
  window.location = "./account.php";
});




$(".account-container-deco").on("click", function () {
  deco = "ok";

  $.post(
    "./processing/process_deco.php",
    {
      deco: deco,
    },
    function () {
      window.location = ".";
    }
  );
});
