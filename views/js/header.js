$(document).ready(function () {
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
    window.location = ".";
  });

  $(".register").click(function () {
    window.location = "sign-up";
  });

  $(".connect").click(function () {
    window.location = "sign-in";
  });

  $(".myaccount").click(function () {
    window.location = "account";
  });

  $(".account-container-deco").on("click", function () {
    deco = "ok";

    $.post(
      "./controllers/process_deco.php",
      {
        deco: deco,
      },
      function () {
        window.location = ".";
      }
    );
  });
});
