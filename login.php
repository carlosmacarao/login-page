<?php
    if (isset($_POST['submit'])) {
        /*
        print_r('Usuário: ' .$_POST['user']);
        print_r('<br>');
        print_r('Senha: ' .$_POST['pass']);
        */

        include_once('config.php');

        $usuario = $_POST['user'];
        $senha = $_POST['pass'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, password) VALUES ('$usuario', '$senha')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <form class="box" action="login.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>

    
</body>
</html>