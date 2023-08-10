<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
</head>
<body>
    <form action="" method="post">
        Email: <input type="text" name="email" value="" id=""> <br>
        Senha: <input type="text" name="senha" value=""> <br>
        <button type="submit" name="logar">Entrar</button>
        <button>Cadastrar</button>
    </form>
</body>
</html>

<?php
    $Email = $_POST["email"];
    $senha = $_POST["senha"];

    echo "Óla o Email cadastrado é " .$Email. "e a senha foi" .$senha;
?>