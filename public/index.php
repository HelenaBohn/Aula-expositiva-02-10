<?php
    session_start();
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <h1> Bem vindo ao Crud com Foto</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        <p>You're logged in</p>
        <a href="dashboard.php">Access Dashboard</a>
        <a href="logout.php">Log Out</a>
    <?php else: ?>

        <p> Por favor faça seu <a href="login.php"> Login</a> ou faça seu <a href="register.php"> Registro</a></p>

</div>

</body>
</html>