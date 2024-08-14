// Validate Form
$(function () {
  $(".select2bs4").select2({
    theme: "bootstrap4",
  });

  var Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
  });

  $("#form").on("submit", function (event) {
    event.preventDefault();

    var now = new Date();
    var formattedDate =
      now.getFullYear() +
      "-" +
      (now.getMonth() + 1).toString().padStart(2, "0") +
      "-" +
      now.getDate().toString().padStart(2, "0") +
      " " +
      now.getHours().toString().padStart(2, "0") +
      ":" +
      now.getMinutes().toString().padStart(2, "0") +
      ":" +
      now.getSeconds().toString().padStart(2, "0");
    $("#waktu_input").val(formattedDate);

    var formData = new FormData($("#form")[0]);
    $.ajax({
      url: $("#form").attr("action"),
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        Swal.fire({
          icon: "success",
          title: "Data berhasil diperbarui.",
          showConfirmButton: false,
          timer: 1500,
        }).then(() => {
          window.location.href = "data-hardware.php";
        });
      },
      error: function (error) {
        console.error("Error:", error);
      },
    });
  });

  // Update custom file input label
  $(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
});
