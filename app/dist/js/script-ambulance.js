function toggleOtherInput(inputId) {
    var otherInput = document.getElementById(inputId);
    var radioOther = document.querySelector('input[name="' + inputId.replace('_input', '') + '"][value="Other"]');

    if (radioOther.checked) {
        otherInput.style.display = 'block';
    } else {
        otherInput.style.display = 'none';
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var radioInputs = document.querySelectorAll('input[type="radio"]');

    radioInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            var inputId = input.name + '_input';
            var otherInput = document.getElementById(inputId);

            if (input.value === 'Other' && input.checked) {
                otherInput.style.display = 'block';
                otherInput.setAttribute('required', 'required');
            } else {
                otherInput.style.display = 'none';
                otherInput.removeAttribute('required');
            }
        });
    });
});