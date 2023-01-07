<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            background-color: #ccc;
        }

        form {
            width: 15%;
            min-height: 45%;
            max-height: 55%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        input,
        select,
        button,
        textarea {
            height: 2rem;
            border-radius: 0.3rem;
            padding: 0.5rem;
        }

        textarea {
            height: 4rem;
        }

        .form-error {
            color: red;
        }

        .form-success {
            color: green;
        }

        .input-error {
            box-shadow: 0 0 5px red;
        }
    </style>
</head>

<body>
    <form action="mail.php" method="POST">
        <input id="mail-name" type="text" name="name" placeholder="Full Name">
        <br>
        <input id="mail-email" type="text" name="email" placeholder="E-mail">
        <br>
        <select name="gender" id="mail-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <textarea id="mail-message" name="message" placeholder="Message"></textarea>
        <br>
        <button id="mail-submit" type="submit" name="submit">Send E-mail</button>
        <p class="form-message"></p>
    </form>

    <script src="jquery-3.6.0.js"></script>
    <script src="script.js"></script>
</body>

</html>