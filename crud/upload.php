<?php include('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id=$id";

$dados = $conn->query($sql);

$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

$cliente = $clientes[0];

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tele = $_POST['tele'];
    $nascimento = $_POST['nascimento'];
    $grupo = $_POST['grupo'];

    $atualiza = "UPDATE clientes SET nome='$nome',email='$email',tele='$tele',nascimento='$nascimento',grupo='$grupo' WHERE id=$id";
    $query = $conn->prepare($atualiza);
    $query->execute();
}
   
?>