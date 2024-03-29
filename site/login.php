<?php

// primeiro comando da página quando se quer controlar o acesso a ela
session_start();

if (!empty($_POST)) {

    //if ($_POST["email"] == "admin" && $_POST["senha"] == "admin") {
    if ($_POST["email"] == $_POST["senha"]) {

        $_SESSION["logado"] = true;
        $_SESSION["usuario"] = $_POST["email"];

        // após o login, redireciona a navegação para a página inicial do sistema!
        header("location: index.php");
        exit;


    } else {
        echo "E-mail e senha incorretos!";
        exit;
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-center">
    <div class="login-dark" style="background-image: url(&quot;assets/img/images.png&quot;);width: 1325px;height: 1000px;margin: -170px;padding: 20px;left:17%">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/4.png" style="width: 200px;height: 200px;right:600px;"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="senha" placeholder="Senha"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(227,28,59);">Login</button></div>
             <a href="index.php">Voltar</a>
        </form>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>