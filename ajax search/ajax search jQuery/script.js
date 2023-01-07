$(document).ready(function () {
    $("input").keyup(function () {
        let name = $('input').val();
        if (name.length === 0) {
            $('#test').html("");
        }
        else {
            $('#test').load('suggestions.php', { suggestion: name });
            // $.post('suggestions.php', { suggestion: name }, function (data, status) {
            //     $('#test').html(data);
            // });
        }
    });
});