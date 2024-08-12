// PDF Name Code
document.getElementById("pdf_file").addEventListener("change", function () {
  var fileName = this.value.split("\\").pop();
  var fileDisplay = document.getElementById("file-name");
  fileDisplay.textContent = fileName;
});
// PDF Name Code

// Check ALl Code
document.getElementById("checkAll").addEventListener("change", function () {
  var checkboxes = document.querySelectorAll(".checkItem");
  checkboxes.forEach((checkbox) => (checkbox.checked = this.checked));
});
// Check ALl Code

// Validate Code
document.getElementById("uploadButton").addEventListener("click", function () {
  var checkboxes = document.querySelectorAll(".checkItem");
  var isChecked = Array.from(checkboxes).some((checkbox) => checkbox.checked);

  if (!isChecked) {
    Swal.fire({
      icon: "error",
      title: "Pilih Unit!",
      text: "Silakan pilih unit terlebih dahulu.",
    });
    event.preventDefault();
    return;
  } else {
    document.getElementById("form").submit();
  }
});
// Validate Code