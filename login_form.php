<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="form-container">

    <form action="" method="post">
        <h3 class="title">Login</h3>
        
        <input type="email" name="usermail" placeholder="Email" class="box" required>
        <input type="password" name="password" placeholder="Senha" class="box" required>
        <input type="submit" value="Entrar" class="form-btn" name="submit">
        <p>Não tem uma cona? <a href="register_form.php">Registra-se!</a></p>
    </form>

</div>

</body>
</html>