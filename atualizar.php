<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/atualizar.css">
</head>
<body>
    <div class="conteiner">
    <?php include('crud/upload.php'); 
    ?>
    <form action="" method="post">
    <h1>Atualizar Cliente</h1><hr><br>
        Nome: <input type="text" name="nome" value="<?= $cliente['nome'] ?>"><br><br>
        E-mail: <input type="text" name="email" id="email" value="<?= $cliente['email'] ?>"><br><br>
        Telefone: <input type="tel" name="tele" id="tele" value="<?= $cliente['tele'] ?>"><br><br>
        Data de Nascimento: <input type="date" name="nascimento" id="nascimento" value="<?= $cliente['nascimento'] ?>"><br><br>
        Grupo: <select name="grupo" id="grupo" value="<?= $cliente['grupo'] ?>">
            <option value="Bronze">Bronze</option>
            <option value="Prata">Prata</option>
            <option value="Ouro">Ouro</option>
            <option value="Diamente">Diamente</option>
        </select><br><br>
        <button type="submit" name="atualizar">Atualizar</button><br><br>
        <a href="index.php">Voltar</a>
    </form>

    </div>
       
    
</body>
</html>