<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <style>
        body {
            background-image: url(Image-test/Fond_de_site_profil2.jpg);
            background-size: cover no-repeat;
        }

        form {
            position: absolute;
            top: 20%;
            left: 27%;
            background-image: url(Image-test/Fond_ecran_history2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            display: block;
            width: 800px;
            height: 400px;
            border: 3px solid rgba(33, 119, 240, 0.75);
            color: white;
        }

        form h2,
        form h1 {
            text-align: center;
        }

        form input[type=text],
        form input[type=password] {
            width: 300px;
            height: 30px;
            position: relative;
            left: 31%;
        }

        form input[type=text]:focus,
        form input[type=password]:focus {
            background-color: black;
            color: white;
        }

        form button {
            font-size: medium;
            position: absolute;
            right: 5%;
            bottom: 25%;
            width: 110px;
            height: 30px;
            background-color: white;
            border: 2px solid black;
        }

        form button:hover {
            background-color: rgba(45, 45, 45, 1);
            color: white;
        }

        form div {
            display: block;
            position: absolute;
            bottom: 0%;
            left: 0%;
            right: 0%;
        }

        div a {
            text-decoration: none;
            list-style-type: none;
            color: whitesmoke;
            text-shadow: 2px 2px black;
            width: 100%;
            height: 40px;
            text-align: center;
        }

        div a:hover {
            color: red;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            left: 6px;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
        }

        li a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 14px 16px;
        }

        li a:hover {
            background-color: #111;
            color: white;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="Test_formulaire.php">Retour</a></li>
    </ul>
    <form action="Check_connection.php" method="POST">
        <h1>Connectez-vous</h1>
        <h2>Compte Mail</h2>
        <input type="text" name="userMail" placeholder="abc@example.com" autofocus>
        <h2>Mot de Passe</h2>
        <input type="password" name="passWord" placeholder="*******">
        <button type="submit">Connection</button>
        <div>
            <a href="#" type="button">
                <h3>Mot de Passe oublié? Par ICI !!!</h3>
            </a>
            <a href="New_Compte.php" type="button">
                <h3>Pas de Compte? Par ICI !!!</h3>
            </a>
        </div>
    </form>
</body>

</html>