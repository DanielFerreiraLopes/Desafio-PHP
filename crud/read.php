<?php include('conn.php');

$sql = "SELECT * FROM clientes";

$dados = $conn->query($sql);

$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

?>