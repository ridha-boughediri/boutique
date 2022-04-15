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

  $(".slick-card").click(function () {
    let idcard =  $(this).attr("data-id");
    window.location = "produit/" + idcard;
  });

  $(".search-btn").click(function () {
    let resultsearch =  $("#search-place").val();
    window.location = "search/" + resultsearch;
  });

  $(".btnprodsous").click(function () {
    let idcate =  $(this).attr("data-id");
    let idsouscate =  $(this).attr("data-sousid");
    window.location = "produits/" + idcate + '/' + idsouscate;
  });

  $(".account-container-deco").on("click", function () {
    deco = "ok";

    $.post(
      "./controllers/process_deco.php",
      {},
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
