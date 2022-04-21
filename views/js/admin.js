$(document).ready(function () {
  $(".dashboard").click(function () {
    window.location = "admin/dashboard";
  });
  $(".users").click(function () {
    window.location = "admin/users";
  });
  $(".add-produit").click(function () {
    window.location = "admin/add-produit";
  });
  $(".update-produit").click(function () {
    window.location = "admin/update-produit";
  });
  $(".produit").click(function () {
    window.location = "admin/produit";
  });
  $(".add-type-produit").click(function () {
    window.location = "admin/add-type-produit";
  });
  $(".type-produit").click(function () {
    window.location = "admin/type-produit";
  });
  $(".add-color").click(function () {
    window.location = "admin/add-color";
  });
  $(".colors").click(function () {
    window.location = "admin/colors";
  });
  $(".add-categorie").click(function () {
    window.location = "admin/add-categorie";
  });
  $(".categories").click(function () {
    window.location = "admin/categorie";
  });
  $(".add-sous-categories").click(function () {
    window.location = "admin/add-sous-categorie";
  });
  $(".sous-categories").click(function () {
    window.location = "admin/sous-categorie";
  });

  $(".addpcate").change(function () {
    let categorie = $(this).children("option:selected").val();
    $.post(
      "./controllers/process_souscategorie.php",
      {
        categorie: categorie,
      },
      function (data) {
        $("#idsouscategorie").empty();
        $("#idsouscategorie").append(data);
        
      }
    );
  });
});
