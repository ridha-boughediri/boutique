$(document).ready(function () {
  $(".payment-submitted").click(function () {
    // // testde recuperation de d'infos panier

    // let totalachat = $(this).attr("data-id");

    // let id_produit= $(".shopping-cart-product").attr("data-id");

    // console.log(id_produit);
    // // testde recuperation de d'infos panier
    // let nompreoduit = $(".product-title").attr("data-id");

    // console.log(nompreoduit);
    // let qtecommande = $(".text-field-container").attr("data-id");

    // console.log(qtecommande);

    // // envoi des info vers php

    cardcart = $("#card-cart").val();
    expcart = $("#exp-cart").val();
    cvvcart = $("#cvv-cart").val();

    $.post(
      "./controllers/process_payment.php",
      {
        cardcart: cardcart,
        expcart: expcart,
        cvvcart: cvvcart,
      },
      function (data) {
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data.includes("été modifié !")) {
            $(".field").addClass("success");
            $(".success").empty();
            $(".success").append(data);
          } else {
            $(".field").addClass("error");
            $(".error").empty();
            $(".error").append(data);
          }
          // $(".body-admin-bar").load(location.href + " .body-admin-bar");
        }
      }
    );
    alert(id_produit);
    alert(nompreoduit);
    alert(qtecommande);
    alert(totalachat);
  });
});
