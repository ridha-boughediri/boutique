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

  $(".search-btn").click(function () {
    let resultsearch =  $(".account-container").val();
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

  $(".content-drop").hover(
    function () {
      let getbtncate = $(this).children("button");
      let btncate = $(getbtncate).attr("data-btncate");
      $('[data-divcate="' + btncate + '"]').addClass("hovercate");
    },
    function () {
      let getbtncate = $(this).children("button");
      let btncate = $(getbtncate).attr("data-btncate");
      $('[data-divcate="' + btncate + '"]').removeClass("hovercate");
    }
  );
});
