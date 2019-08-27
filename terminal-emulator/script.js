// function submitOnEnter(inputElement, event) {
//     if (event.keyCode == 13) {
//         inputElement.form.submit();
//     }
form.submit(function(e) {
    e.preventDefault();
    form_data = $(this).serialize();
    $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
});