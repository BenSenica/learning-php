function submitOnEnter(inputElement, event) {
    if (event.keyCode == 13) {
        inputElement.form.submit();
    }

}