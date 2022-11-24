<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Página principal</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="php admin crud/css/style.css">

</head>
<body>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="" method="post" enctype="multipart/form-data">
         <h3>add novo cliente</h3>
         <input type="text" placeholder="Nome" name="nome" class="box">
         <input type="number" placeholder="CPF" name="cpf" class="box">
         <input type="email" placeholder="Email" name="email" class="box">
         <input type="number" placeholder="Telefone" name="telefone" class="box">
         <input type="text" placeholder="Endereço" name="endereco" class="box">
         <input type="submit" class="btn" name="add_cliente" value="add cliente">
      </form>

   </div>

   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
         </tr>
         </thead>
         <tr>
            <td>1</td>
            <td>Dardin</td>
            <td>09832567522</td>
            <td>dardin@gmail.com</td>
            <td>44967852341</td>
            <td>Avenida cachorro sentado</td>
            <td>
               <a href="editar.php" class="btn"> <i class="fas fa-edit"></i> Editar </a>
               <a href="home.php" class="btn"> <i class="fas fa-trash"></i> Deletar </a>
            </td>
         </tr>
      </table>
   </div>

</div>


</body>
</html>