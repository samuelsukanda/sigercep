document.querySelector('form').addEventListener('submit', function(event) {
    var waktu_input = getFormInputTime();
    var selectedDesain = getSelectedDesain();

    if (selectedDesain === "Video") {
        var menit = document.getElementById("menit").value;
        var detik = document.getElementById("detik").value;

        if (menit === "0" && detik === "0") {
            event.preventDefault();

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Harap masukkan durasi video'
            });
            fileInput.value = '';
            return false;
        }
    } else {
        var width = document.getElementById("width").value;
        var height = document.getElementById("height").value;
        if (!width || !height) {
            event.preventDefault();

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Harap masukkan ukuran gambar'
            });
            fileInput.value = '';
            return false;
        }
    }
});

window.addEventListener('DOMContentLoaded', function() {
    var formUkuranDiv = document.getElementById("form-ukuran");
    var formDurasiDiv = document.getElementById("form-durasi");

    formUkuranDiv.style.display = "none";
    formDurasiDiv.style.display = "none";
});

function getFormInputTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var formattedTime = hours + ':' + minutes + ':' + seconds;
    document.getElementById('waktu_input').value = formattedTime;
    return formattedTime;
}

function removeRequiredFromUkuran() {
    document.getElementById("width").removeAttribute("required");
    document.getElementById("height").removeAttribute("required");
}

function removeRequiredFromDurasi() {
    document.getElementById("menit").removeAttribute("required");
    document.getElementById("detik").removeAttribute("required");
}

function hideFormUkuran() {
    document.getElementById("form-ukuran").style.display = "none";
}

function hideFormDurasi() {
    document.getElementById("form-durasi").style.display = "none";
}

function showFormUkuran() {
    document.getElementById("form-ukuran").style.display = "block";
}

function showFormDurasi() {
    document.getElementById("form-durasi").style.display = "block";
}

function getSelectedDesain() {
    var desainRadios = document.getElementsByName("desain");
    var selectedDesain;

    for (var i = 0; i < desainRadios.length; i++) {
        if (desainRadios[i].checked) {
            selectedDesain = desainRadios[i].value;
            break;
        }
    }

    return selectedDesain;
}

function setFormVisibility() {
    var selectedDesain = getSelectedDesain();

    if (selectedDesain === "Video") {
        removeRequiredFromUkuran();
        hideFormUkuran();
        showFormDurasi();
        document.getElementById("durasi").setAttribute("required", "required");
    } else {
        removeRequiredFromDurasi();
        hideFormDurasi();
        showFormUkuran();
        document.getElementById("width").setAttribute("required", "required");
        document.getElementById("height").setAttribute("required", "required");
    }
}

var desainRadios = document.getElementsByName("desain");
for (var i = 0; i < desainRadios.length; i++) {
    desainRadios[i].addEventListener("change", setFormVisibility);
}

function disableFormUkuranInputs() {
    var formUkuranInputs = document.getElementById("form-ukuran").getElementsByTagName("input");
    var formUkuranSelect = document.getElementById("form-ukuran").getElementsByTagName("select");

    for (var i = 0; i < formUkuranInputs.length; i++) {
        formUkuranInputs[i].disabled = true;
    }

    for (var i = 0; i < formUkuranSelect.length; i++) {
        formUkuranSelect[i].disabled = true;
    }
}

function disableFormDurasiInputs() {
    var formDurasiInputs = document.getElementById("form-durasi").getElementsByTagName("input");

    for (var i = 0; i < formDurasiInputs.length; i++) {
        formDurasiInputs[i].disabled = true;
    }
}

function enableFormInputs() {
    var formInputs = document.getElementsByTagName("input");
    var formSelects = document.getElementsByTagName("select");

    for (var i = 0; i < formInputs.length; i++) {
        formInputs[i].disabled = false;
    }

    for (var i = 0; i < formSelects.length; i++) {
        formSelects[i].disabled = false;
    }
}

function resetForm() {
    document.getElementById("form").reset();
    enableFormInputs();
    setFormVisibility();
}

function submitForm() {
    disableFormUkuranInputs();
    disableFormDurasiInputs();
    document.getElementById("submit-button").disabled = true;
    document.getElementById("reset-button").disabled = true;
    document.getElementById("loading").style.display = "block";
}