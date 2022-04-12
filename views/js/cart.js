$(document).ready(function () {
  $("#buy-container").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_add_cart.php",
      {
        id: id,
      },
      function () {
        $("#buy-container").animate(
          { deg: 360 },
          {
            duration: 1200,
            step: function (now) {
              $(this).css({ transform: "rotate(" + now + "deg)" });
            },
          }
        );
      }
    );
  });

  $(".deletecart").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_delete_cart.php",
      {
        id: id,
      },
      function () {}
    );
    $(".nbcart").reload();
    $(".cart-panier").reload();
  });
});
