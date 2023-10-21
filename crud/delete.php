<?php include('conn.php'); 



if(isset($_POST['excluir'])){
    $id = $_POST['delete'];

$sql = "DELETE FROM clientes WHERE id=$id";

$delete = $conn->prepare($sql);

$delete->execute();

}
?>