document.addEventListener("DOMContentLoaded", function () {
    let inputField = document.getElementById('input-name');
    inputField.addEventListener('input', function () {
        let input = inputField.value;
        let data = new FormData();
        console.log(data);
        data.append('input', input)
        fetch('suggestions.php',
            {
                method: 'POST',
                body: data
            }).then(function (response) {
                return response.text();
            }).then(function (text) {
                document.getElementById('suggestions').innerHTML = text;
            });
    });
});



