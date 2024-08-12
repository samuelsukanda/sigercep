var canvas = document.getElementById("signature-pad");

var signaturePad = new SignaturePad(canvas, {
  backgroundColor: "rgb(255, 255, 255)",
});

document.getElementById("clear").addEventListener("click", function () {
  signaturePad.clear();
});

document.getElementById("undo").addEventListener("click", function () {
  var data = signaturePad.toData();
  if (data) {
    data.pop();
    signaturePad.fromData(data);
  }
});

document.getElementById("submit").addEventListener("click", function (event) {
  var signature = signaturePad.toDataURL();
  if (signaturePad.isEmpty()) {
    Swal.fire({
      icon: "error",
      title: "Tanda Tangan Belum Diisi!",
      text: "Silakan isi tanda tangan terlebih dahulu.",
    });
    event.preventDefault();
    return;
  }
  document.getElementById("tanda_tangan").value = signature;
  var nama = document.getElementById("nama").value;
  var tanggal = document.getElementById("tanggal").value;
  var waktu_input = getFormInputTime();

  $.ajax({
    url: "proses-absensi.php",
    data: {
      nama: nama,
      tanggal: tanggal,
      tanda_tangan: signature,
      waktu_input: waktu_input,
    },
  });
});
