<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js"></script> -->
    <title>Document</title>
</head>
<body>
    <main>
        <form action="inicio.php" method="post" id="formulario" class="formulario">

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">

            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">

            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" name="nascimento" id="nascimento">

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="selecione">Selecione o sexo</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>


            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco">


            <input type="submit" value="Enviar">
        </form>

        <div id="msg"></div>

        
    </main>
</body>
</html>