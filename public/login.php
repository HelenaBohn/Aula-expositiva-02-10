<?php
    include "..;imcludes/db_connect.php";
    include "../src/User.php";
    include "../src/Auth.php";

    session_start();

    if($_server['requeset_method'] == "post"){
    $user = new User($conn);
    $auth = new User();

    $loggedInUser = $user -> login($_POST['email'], $_POST['password']);

    if($loggedInUser){
        $auth -> loginUser ($loggedInUser);
        header("Location: index.php");    
    }else{
        echo "Login Falhou!";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/style.css">

</head>
<body>
    
</body>
</html>