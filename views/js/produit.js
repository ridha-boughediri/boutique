$(document).ready(function () {

// A refaire


  $(".submit-edit-produit").click(function (e) {
    e.preventDefault();
    var fd = new FormData();
    id = $(this).attr("data-id");
    nameproduit = $("#nameproduit").val();
    idcategorie = $("#idcategorie").val();
    idsouscategorie = $("#idsouscategorie").val();
    idcouleur = $("#idcouleur").val();
    descriptionproduit = $("#descriptionproduit").val();
    prixproduit = $("#prixproduit").val();
    let files = $("#fileproduit")[0].files[0];
    type = $("#type").val();
    qtestock = $("#qtestock").val();

    fd.append("id", id);
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
      url: "./controllers/process_produit.php",
      type: "post",
      data: fd,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log(response);

        if (response != "") {
          $(".field").removeClass("success");

          $(".field").removeClass("error");
          if (response.includes("Votre produit à été modifié")) {
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

  $(".submit-delete-produit").on("click", function () {
    id = $(this).attr("data-id");
alert("okttestbin");
    $.post(
      "./controllers/process_delete_produit.php",
      {
        id: id,
      },
      function (data) {
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data == "a été supprimé !") {
            $(".field").addClass("success");
            $(".success").empty();
            $(".success").append(data);
          } else {
            $(".field").addClass("error");
            $(".error").empty();
            $(".body-admin-lign").append(data);
          }
          $(".body-admin-bar").load(location.href + " .body-admin-bar");
        }
      }
    );
  });
});


