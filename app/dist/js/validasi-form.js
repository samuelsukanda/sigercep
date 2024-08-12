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
  
      if (!validateFile()) {
        return false;
      }
  
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
            title: "Data berhasil dimasukan.",
            showConfirmButton: false,
            timer: 1500,
          });
  
          $("#form")[0].reset();
          $(".custom-file-label").html("Choose file");
  
          $(".select2bs4").val(null).trigger("change");
        },
        error: function (error) {
          console.error("Error:", error);
        },
      });
    });
  
    $(".custom-file-input").on("change", function () {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  });
  // Validate Form
  
  // Validate Code
  function validateFile() {
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    var fileInput = document.getElementById("foto");
    var filePath = fileInput.value;
    if (!allowedExtensions.exec(filePath)) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Tipe file yang diupload harus berupa JPG, JPEG, atau PNG.",
      });
      fileInput.value = "";
      return false;
    }
    return true;
  }
  // Validate Code