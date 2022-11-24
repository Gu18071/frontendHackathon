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
      <h3 class="title">Registrar-se</h3>
     
      <input type="name" name="name" placeholder="Nome da clínica" class="box" required>
      <input type="email" name="usermail" placeholder="Email" class="box" required>
      <input type="password" name="password" placeholder="Senha" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirmar senha" class="box" required>
      <input type="submit" value="Registrar" class="form-btn" name="submit">
      <p>Não tem uma conta? <a href="login_form.php">Login agora!</a></p>
   </form>

</div>

</body>
</html>