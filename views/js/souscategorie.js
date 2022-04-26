$(document).ready(function () {
  $(".submit-add-sous-categorie").click(function (e) {
    e.preventDefault();
    id = $(this).attr("data-id");
    nameproduit = $("#nameproduit").val();
    idcategorie = $("#idcategorie").val();
    idsouscategorie = $("#idsouscategorie").val();

    $.post(
      "./controllers/process_add_souscategorie.php",
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
            $(".error").append(data);
          }
          $(".view-container-admin").load(
            location.href + " .view-container-admin"
          );
        }
      }
    );
  });

  $(".submit-update-sous-categorie").click(function (e) {
    e.preventDefault();
    id = $(this).attr("data-id");
    nameproduit = $("#nameproduit").val();
    idcategorie = $("#idcategorie").val();
    idsouscategorie = $("#idsouscategorie").val();

    $.post(
      "./controllers/process_update_souscategorie.php",
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
            $(".error").append(data);
          }
          $(".view-container-admin").load(
            location.href + " .view-container-admin"
          );
        }
      }
    );
  });

  $(".submit-edit-sous-categorie").click(function (e) {
    id = $(this).attr("data-id");
    window.location = "admin/sous-categorie/" + id;
  });

  $(".submit-delete-sous-categorie").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_delete_souscategorie.php",
      {
        id: id,
      },
      function (data) {
        console.log(data);
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
            $(".error").append(data);
          }
          $(".view-container-admin").load(
            location.href + " .view-container-admin"
          );
        }
      }
    );
  });
});
