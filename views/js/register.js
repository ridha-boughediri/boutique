$(document).ready(function () {
  $(".submit-register").on("click", function () {
    firstname = $("#firstname").val();
    lastname = $("#lastname").val();
    mail = $("#mail").val();
    confirm_mail = $("#confirm_mail").val();
    password = $("#password").val();
    confirm_password = $("#confirm_password").val();
    phone = $("#phone").val();
    city = $("#city").val();
    postal_code = $("#postal_code").val();
    birthday = $("#birthday").val();
    submitregister = "submit-register";

    $.post(
      "./controllers/process_register.php",
      {
        firstname: firstname,
        lastname: lastname,
        mail: mail,
        confirm_mail: confirm_mail,
        password: password,
        confirm_password: confirm_password,
        phone: phone,
        city: city,
        postal_code: postal_code,
        birthday: birthday,
        submitregister: submitregister,
      },
      function (data) {
        console.log(data);
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data == "Votre Compte à été créer") {
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
