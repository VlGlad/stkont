$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        auth($(this));
    });
});

function auth(form) {
    if(form.find('input[name=login]').val() == '')
        return inputError(form.find('input[name=login]'));
    if(form.find('input[name=password]').val() == '')
        return inputError(form.find('input[name=password]'));

    request({
        url: '/api/auth',
        method: 'post',
        data: form.serializeArray(),
        beforeSend: function() {
            form.find('button').attr('disabled', 'disabled')
        },
        success: function(data) {
            document.location.href = data.url
        },
        error: function(data) {
            errorModal(data.message);
        },
        complete: function() {
            form.find('button').removeAttr('disabled')
        }
    });
}