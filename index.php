<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<?= include('crud/delete.php')?>
            <?= include_once('crud/read.php') ?>
    <div id="conteiner">
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Idade</th>
            <th>Grupo</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>

        <?php foreach($clientes as $cliente) { 
             $idade = date('Y/m/d') - $cliente['nascimento'];
           ?>
           
         
        <tr>
            <td><?= $cliente['nome']?></td>
            <td><?= $cliente['email']?></td>
            <td><?= $cliente['tele']?></td>
            <td><?= $idade ?></td>
            <td><?= $cliente['grupo']?></td>
            <td><a href="atualizar.php?id=<?= $cliente['id']?>"><button>Alterar</button></a></td>
            <form action="" method="post">
                <td>
                    <input type="hidden" name="delete" value="<?= $cliente['id']?>">
                    <button type="submit" name="excluir">Excluir</button>
                </td>
            </form>
           
            
        </tr>
        <?php } ?>
    </table><br>

    <a href="registro.php"><button >Novo Cliente</button></a>

    </div>
</body>

</html>
