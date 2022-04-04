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
        if (response != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (response == "Votre photo de profil a bien été modifié") {
            $(".field").addClass("success");
            $(".success").empty();
            $(".success").append(response);
            
            // $(".dropbtn").reload();
            $("#drop-img-avatar").load(location.href + " #drop-img-avatar");
          } else {
            $(".field").addClass("error");
            $(".error").empty();
            $(".error").append(response);
          }
        }
<<<<<<< HEAD

        $(".passz").empty();
        $(".passz").append(a[3]);

        if (a[3] == "Votre mot de passe a bien été modifié !") {
          $(".passz").addClass("success");
        } else {
          $(".passz").addClass("error");
        }

        $(".phonez").empty();
        $(".phonez").append(a[4]);

        if (a[4] == "Votre photo de profil a bien été modifié") {
          $(".phonez").addClass("success");
        } else {
          $(".phonez").addClass("error");
        }

        $(".filez").empty();
        $(".filez").append(a[5]);

        if (a[5] == "Votre photo de profil a bien été modifié") {
          $(".filez").addClass("success");
        } else {
          $(".filez").addClass("error");
        }
=======
>>>>>>> parent of 0e3b714 (edit message error profile)
      },
    });
  });

  $(".profile").on("click", function () {
    var profile =
      '<h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Profil</h1><form id="data" method="post" enctype="multipart/form-data" class="inputs-container"> <input type="text" id="firstname" class="login-input" placeholder="Prenom*" value=""><input type="text" id="lastname" class="login-input" placeholder="Nom*" value=""><input type="mail" id="mail" class="login-input" placeholder="E-mail*" value=""><input type="password" id="password" class="login-input" placeholder="Mot de passe*"><input type="number" id="phone" class="login-input" placeholder="N° de téléphone portable*"><label class="ph">Photo de Profil: </label><input type="file"  id="file" name="file" class="button-file" value=""><p>Tous les champs marqués d\'un astérisque (*) sont obligatoires.</p><p class="field"></p><button class="button-secondary submit-edit-profile">Modifier</button></form>';

    $(".view-container").empty();
    $(".view-container").append(profile);
  });

  $(".order").on("click", function () {
    var order =
      '<h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Vos Commandes</h1><p>Aucune Commande</p>';

    $(".view-container").empty();
    $(".view-container").append(order);
  });

  $(".adress").on("click", function () {
    var adress =
      '<h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Adresse</h1>';
    $(".view-container").empty();
    $(".view-container").append(adress);
  });

  $(".pay").on("click", function () {
    var pay =
      '<h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Vos Paiement</h1>';
    $(".view-container").empty();
    $(".view-container").append(pay);
  });
});
