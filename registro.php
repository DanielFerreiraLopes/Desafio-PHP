<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div class="conteiner">
        
    <form action="" method="post">
    <h1>Cadastar Cliente</h1><hr><br>
    
        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="text" name="email" id="email"><br><br>
        Telefone: <input type="tel" name="tele" id="tele"><br><br>
        Data de Nascimento: <input type="date" name="nascimento" id="nascimento"><br><br>
        Grupo: <select name="grupo" id="grupo">
            <option value="Bronze">Bronze</option>
            <option value="Prata">Prata</option>
            <option value="Ouro">Ouro</option>
            <option value="Diamente">Diamente</option>
        </select><br>
        <br>
        <button type="submit" name="cadastro">Cadastrar +</button><br><br>
        <a href="index.php">Voltar</a>   
    </form>

    </div>

    <?= include('crud/create.php')?>
</body>
</html>