$(".submit-connect").on("click", function () {
  mail = $("#mail").val();
  password = $("#password").val();
  submitconnect = "submit-connect";

  $.post(
    "./processing/process_connect.php",
    {
      mail: mail,
      password: password,
      submitconnect: submitconnect,
    },
    function (data) {
      if (data != "") {
        $(".field").removeClass("success");
        $(".field").removeClass("error");
        if (data == "Vous êtes connecté !") {
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
