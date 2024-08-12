document.getElementById("checkAll").onclick = function () {
  var checkboxes = document.querySelectorAll(".checkItem");
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
};
