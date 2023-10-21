<?php include('conn.php');

    if(isset($_POST['cadastro'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $nascimento = $_POST['nascimento'];
    $grupo = $_POST['grupo'];

    $sql = "INSERT clientes (nome, email, tele, nascimento, grupo) VALUES ('$nome', '$email', '$tele', '$nascimento', '$grupo')";

    $query = $conn->prepare($sql);

    $query->execute();
}
    ?>