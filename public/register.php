<?php
    include "../includes/db_connect.php";

    session_start();

    if($_server['requeset_method'] == "post"){
    $user = new User($conn);

     $user -> register($_post['nome'],$_post['email'], $_post['password']);
     header("Location: login.php")
     }
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
     <title>Registro</title>
</head>
<body>
    
    <div class="field input">
    <form action="register.php" method="POST">
        <input type="text" name="nome" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Password" placeholder="sua senha">
    </div>

    </form>

</body>
</html>