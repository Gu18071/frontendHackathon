<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php admin crud/css/style.css">
</head>

<body>

    <div class="container">


        <div class="admin-product-form-container centered">

            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="title">Editar cliente</h3>
                <input type="text" class="box" name="nome"  placeholder="Nome">
                <input type="number" min="0" class="box" name="CPF"  placeholder="cpf">
                <input type="email" placeholder="Email" name="email"  class="box">
                <input type="number" placeholder="Telefone" name="telefone" class="box">
                <input type="text" placeholder="Endereço" name="endereco" class="box">
                <input type="submit" value="Editar cliente" name="editar_cliente" class="btn">

                <a href="home.php" class="btn">Voltar!</a>
            </form>

        </div>

    </div>

</body>

</html>