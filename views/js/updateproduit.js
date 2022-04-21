$(document).ready(function () {
    $(".submit-update-produit").click(function (e) {
      e.preventDefault();
      var fd = new FormData();
      nameproduit = $("#nameproduit").val();
      idcategorie = $("#idcategorie").val();
      idsouscategorie = $("#idsouscategorie").val();
      idcouleur = $("#idcouleur").val();
      descriptionproduit = $("#descriptionproduit").val();
      prixproduit = $("#prixproduit").val();
      let files = $("#fileproduit")[0].files[0];
      type = $("#type").val();
      qtestock = $("#qtestock").val();
  
      fd.append("nameproduit", nameproduit);
      fd.append("idcategorie", idcategorie);
      fd.append("idsouscategorie", idsouscategorie);
      fd.append("descriptionproduit", descriptionproduit);
      fd.append("prixproduit", prixproduit);
      fd.append("idcouleur", idcouleur);
      fd.append("file", files);
      fd.append("type", type);
      fd.append("qtestock", qtestock);
  
      $.ajax({
        url: "./controllers/process_update_produit.php",
        type: "post",
        data: fd,
        contentType: false,
        processData: false,
        success: function (response) {
          if (response != "") {
            $(".field").removeClass("success");
            $(".field").removeClass("error");
            if (response.includes("Votre produit à été créer")) {
              $(".field").addClass("success");
              $(".success").empty();
              $(".success").append(response);
            } else {
              $(".field").addClass("error");
              $(".error").empty();
              $(".error").append(response);
            }
          }
        },
      });
    });
  });
  