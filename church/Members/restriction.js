function limitInput(inputField, maxLength) {
    if (inputField.value.length > maxLength) {
        inputField.value = inputField.value.substring(0, maxLength);
    }
}

function isNumberKey(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
