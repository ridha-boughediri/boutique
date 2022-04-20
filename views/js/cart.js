$(document).ready(function () {
  $(".buy-container").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_add_cart.php",
      {
        id: id,
      },
      function (data) {
        $(".buy-container img").animate(
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

  // $(".check-out").click(function () {
  //   window.location = "checkout";
  // });

  // $("#card-cart").on("keypress keyup blur", function (event) {
  //   $(this).val(
  //     $(this)
  //       .val()
  //       .replace(/[^\d].+/, "")
  //   );
  //   if (event.which < 48 || event.which > 57) {
  //     event.preventDefault();
  //   }
  // });

  $("#card-cart").on("keypress change", function (e) {
    e.target.value = e.target.value
      .replace(/[^\dA-Z]/g, "")
      .replace(/(.{4})/g, "$1 ")
      .trim();
      console.log(e.keyCode);
  });

  $("#cvv-cart").on("keypress change", function (event) {
    $(this).val(
      $(this)
        .val()
        .replace(/[^\d].+/, "")
    );
    if (event.which < 48 || event.which > 57) {
      event.preventDefault();
    }
  });

  $("#exp-cart").bind("keyup", "keydown", function (event) {
    var inputLength = event.target.value.length;
    var code = event.keyCode || event.which;
    if (code != 8) {
      if (inputLength === 2) {
        var thisVal = event.target.value;
        thisVal += "/";
        $(event.target).val(thisVal);
      }
    }
  });

});
