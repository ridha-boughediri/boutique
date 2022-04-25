$(document).ready(function () {
    $(".submit-update-categorie").click(function (e) {
      e.preventDefault();
      id = $(this).attr("data-id");
      namecategorie = $("#namecategorie").val();
  
      $.post(
        "./controllers/process_editer_categorie.php",
        {
          id: id,
          namecategorie: namecategorie
        },
        function (data) {
          if (data != "") {
            $(".field").removeClass("success");
            $(".field").removeClass("error");
            if (data.includes("a été modifié !")) {
              $(".field").addClass("success");
              $(".success").empty();
              $(".success").append(data);
            } else {
              $(".field").addClass("error");
              $(".error").empty();
              $(".success").append(data);
            }
            
          }
        }
      );
    });
  
    $(".submit-edit-categorie").click(function (e) {
      id = $(this).attr("data-id");
      window.location = "admin/categorie/" + id;
    });
  
    $(".submit-delete-produit").on("click", function () {
      id = $(this).attr("data-id");
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
  