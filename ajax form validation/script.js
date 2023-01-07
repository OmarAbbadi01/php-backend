$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        let name = $('#mail-name').val();
        let email = $('#mail-email').val();
        let gender = $('#mail-gender').val();
        let message = $('#mail-message').val();
        let submit = $('#mail-submit').val();

        $('.form-message').load('mail.php',
            {
                name: name,
                email: email,
                gender: gender,
                message: message,
                submit: submit
            }
        );
        // $.post('mail.php', 
        // {
        //     name: name,
        //     email: email,
        //     gender: gender,
        //     message: message,
        //     submit: submit
        // }, function (data) {
        //     $('.form-message').html(data);
        // }
        // );
    });
});