$(document).ready(function () {
  $(".submit-forgetmail").on("click", function () {
    forgetmail = $("#forget-mail").val(),
    id = '',

    alert(forgetmail);

    $.post(
      "./controllers/process_forget.php",
      {
        forgetmail: forgetmail,
      },
      function (data) {
        alert(data);
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data == "E-mail envoyé") {
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
//verification de js faites possibilité de faire la totalité avec le fetch
