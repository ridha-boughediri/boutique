$(document).ready(function () {
  $(".submit-add-color").click(function (e) {
    e.preventDefault();
    color = $("#namecolor").val();

    $.post(
      "./controllers/process_add_color.php",
      {
        color: color,
      },
      function (data) {
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data.includes("Votre couleur à été créer !")) {
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

  $(".submit-edit-color").click(function (e) {
    id = $(this).attr("data-id");
    window.location = "admin/colors/" + id;
  });

  $(".submit-update-color").click(function (e) {
    e.preventDefault();
    id = $(this).attr("data-id");
    namecolor = $("#namecolor").val();

    $.post(
      "./controllers/process_edit_color.php",
      {
        id: id,
        namecolor: namecolor,
      },
      function (data) {
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data.includes("été modifié !")) {
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

  $(".submit-delete-color").on("click", function () {
    id = $(this).attr("data-id");

    $.post(
      "./controllers/process_delete_color.php",
      {
        id: id,
      },
      function (data) {
        alert(data);
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data.includes("été supprimé !")) {
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
