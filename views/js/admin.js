$(document).ready(function () {
  $(".dashboard").click(function () {
    window.location = "admin/dashboard";
  });
  $(".add-produit").click(function () {
    window.location = "admin/add-produit";
  });
  $(".produit").click(function () {
    window.location = "admin/produit";
  });
  $(".panier").click(function () {
    window.location = "admin/panier";
  });
  $(".users").click(function () {
    window.location = "admin/users";
  });
  $(".add-color").click(function () {
    window.location = "admin/add-color";
  });
  $(".colors").click(function () {
    window.location = "admin/colors";
  });
  $(".type").click(function () {
    window.location = "admin/type-produit";
  });
  $(".categories").click(function () {
    window.location = "admin/categorie";
  });
  $(".sous-categories").click(function () {
    window.location = "admin/sous-categorie";
  });

  $(".addpcate").change(function () {
    let categorie = $(this).children("option:selected").val();
    // alert("You have selected the country - " + selectedCountry);
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
