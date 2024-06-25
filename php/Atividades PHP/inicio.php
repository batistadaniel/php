<!-- <?php
echo $_POST["nome"] . "<br>";
echo $_POST["usuario"] . "<br>";
echo $_POST["email"] . "<br>";
echo $_POST["cpf"] . "<br>";
echo $_POST["nascimento"] . "<br>";
echo $_POST["sexo"] . "<br>";
echo $_POST["endereco"] . "<br>";
?> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados Recebidos</title>
</head>
<body>
    <main>
        <!-- div com nome da mesma classe do formulario para exdibir as informacoes no "mesmo" layout. xD--->
        <div class="formulario">
            <p><strong>Nome:</strong> <?php echo $_POST["nome"]; ?></p>
            <p><strong>Usuário:</strong> <?php echo $_POST["usuario"]; ?></p>
            <p><strong>E-mail:</strong> <?php echo $_POST["email"]; ?></p>
            <p><strong>CPF:</strong> <?php echo $_POST["cpf"]; ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo $_POST["nascimento"]; ?></p>
            <p><strong>Sexo:</strong> <?php echo $_POST["sexo"]; ?></p>
            <p><strong>Endereço:</strong> <?php echo $_POST["endereco"]; ?></p>
        </div>
    </main>
</body>
</html>

