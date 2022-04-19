$(document).ready(function () {
  $(".submit-edit-profile").click(function (e) {
    e.preventDefault();
    var fd = new FormData();
    var files = $("#file")[0].files[0];
    firstname = $("#firstname").val();
    lastname = $("#lastname").val();
    mail = $("#mail").val();
    password = $("#password").val();
    phone = $("#phone").val();
    fd.append("file", files);
    fd.append("firstname", firstname);
    fd.append("lastname", lastname);
    fd.append("mail", mail);
    fd.append("password", password);
    fd.append("phone", phone);

    $.ajax({
      url: "./controllers/process_edit_profile.php",
      type: "post",
      data: fd,
      contentType: false,
      processData: false,
      success: function (response) {
        let a = response.split(",");

        $(".field").removeClass("success");
        $(".field").removeClass("error");

        $(".firstz").empty();
        $(".firstz").append(a[0]);

        if (a[0] == "Votre prenom a bien été modifié !") {
          $(".firstz").addClass("success");
        } else {
          $(".firstz").addClass("error");
        }

        $(".lastz").empty();
        $(".lastz").append(a[1]);

        if (a[1] == "Votre nom a bien été modifié !") {
          $(".lastz").addClass("success");
        } else {
          $(".lastz").addClass("error");
        }

        $(".mailz").empty();
        $(".mailz").append(a[2]);

        if (a[2] == "Votre E-mail a bien été modifié !") {
          $(".mailz").addClass("success");
        } else {
          $(".mailz").addClass("error");
        }

        $(".passz").empty();
        $(".passz").append(a[3]);

        if (a[3] == "Votre mot de passe a bien été modifié !") {
          $(".passz").addClass("success");
        } else {
          $(".passz").addClass("error");
        }

        $(".phonez").empty();
        $(".phonez").append(a[4]);

        if (a[4] == "Votre numero de téléphone a bien été modifié !") {
          $(".phonez").addClass("success");
        } else {
          $(".phonez").addClass("error");
        }

        $(".filez").empty();
        $(".filez").append(a[5]);

        if (a[5] == "Votre photo de profil a bien été modifié !") {
          $(".filez").addClass("success");
        } else {
          $(".filez").addClass("error");
        }

        $(".field").val("");
      },
    });
  });

  $(".profile").on("click", function () {
    window.location = "account/profile";
  });

  $(".order").on("click", function () {
    window.location = "account/order";
  });

  $(".adress").on("click", function () {
    window.location = "account/adress";
  });

  $(".pay").on("click", function () {
    window.location = "account/pay";
  });

  $(".toadmin").click(function () {
    window.location = "admin";
  });
});
