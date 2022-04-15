$(document).ready(function () {
  $("#buy-container").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_add_cart.php",
      {
        id: id,
      },
      function (data) {
        $("#buy-container").animate(
          { deg: 360 },
          {
            duration: 1200,
            step: function (now) {
              $(this).css({ transform: "rotate(" + now + "deg)" });
            },
          }
        );
        $(".nbcart").empty();
        $(".nbcart").append(data);
        $(".cart-panier").load();
      }
    );
  });

  $(".addocart").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_add_cart.php",
      {
        id: id,
      },
      function (data) {
        var that = $(".addocart");
        setTimeout(function () {
          that
            .animate({ fontSize: "2vw" }, 10)
            .animate({ fontSize: "1vw" }, 10);
        }, that.index() * 100);
        $(".nbcart").empty();
        $(".nbcart").append(data);
        $(".cart-panier").load();
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
      function (data) {
        console.log(data);
        $(".nbcart").empty();
        $(".nbcart").append(data);
        $(".cart-panier").load();
      }
    );
  });

  $(".cartto").click(function () {
    window.location = "cart";
  });

  $(".check-out").click(function () {
    window.location = "checkout";
  });
});
