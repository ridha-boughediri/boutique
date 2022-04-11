$(document).ready(function () {
  $(".submit-add-color").click(function (e) {
    e.preventDefault();
    color = $("#color").val();

    $.post(
      "./controllers/process_add_color.php",
      {
        color: color,
      },
      function (data) {
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data.includes("Votre couleur à été créer !")) {
            $(".field").addClass("success");
            $(".success").empty();
            $(".success").append(data);
          } else {
            $(".field").addClass("error");
            $(".error").empty();
            $(".error").append(data);
          }
        }
      }
    );
  });
});
