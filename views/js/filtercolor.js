$(document).ready(function () {
  $(".btn-filter-color").click(function () {
    let idcolor = $(this).attr("data-id");
    let idcate = $(this).attr("data-cate");
    $.post(
      "./controllers/process_filter.php",
      {
        idcolor: idcolor,
        idcate: idcate,
      },
      function (data) {
        if (data != "") {
          $(".best-carousel").empty();
          $(".best-carousel").append(data);
        }
      }
    );
  });
});
