$(document).ready(function () {
  $(".submit-forgetmail").on("click", function () {
    forgetmail = $("#forget-mail").val(),
    id = '',

    alert(forgetmail);

    $.post(
      "./controllers/process_forget.php",
      {
        forgetmail: forgetmail,
      },
      function (data) {
        alert(data);
        if (data != "") {
          $(".field").removeClass("success");
          $(".field").removeClass("error");
          if (data == "E-mail envoyé") {
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
});

// $(document).ready(function() {
//     $('.login-input').on('keyup', function() {
//       let empty = false;

//       $('.login-input').each(function() {
//         empty = $(this).val().length == 0;
//       });

//       if (empty)
//         $('.submit-forgetmail').attr('disabled', 'disabled');
//       else
//         $('.submit-forgetmail').attr('disabled', false);
//     });
//   });

// samirgonzalez1315@gmail.com
