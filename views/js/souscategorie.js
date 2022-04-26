$(document).ready(function () {
  $(".submit-add-sous-categorie").click(function (e) {
    e.preventDefault();
    idcategorie = $("#idcategorie").val();
    namesouscategorie = $("#namesous-categorie").val();

    $.post(
      "./controllers/process_add_souscategorie.php",
      {
        idcategorie: idcategorie,
        namesouscategorie: namesouscategorie,
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
          // $(".view-container-admin").load(
          //   location.href + " .view-container-admin"
          // );
        }
      }
    );
  });

  $(".submit-update-sous-categorie").click(function (e) {
    e.preventDefault();
    id = $(this).attr("data-id");
    namesouscategorie = $("#namesouscategorie").val();

    $.post(
      "./controllers/process_edit_souscategorie.php",
      {
        id: id,
        namesouscategorie: namesouscategorie,
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
          $(".body-admin-bar").load(location.href + " .body-admin-bar");
        }
      }
    );
  });
});
