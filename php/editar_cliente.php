<?php 
header("Access-Control-Allow-Origin: *");
include_once 'conexao.php';

$idUser =  intval($_POST['idUser']);
$name	= $_POST['nome'];
$texto  = $_POST['texto']; 
$email	= $_POST['email'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE tab_cliente
          SET nome = '$nome',
          SET telefone  = '$telefone',
          SET email = '$email',
          SET endereco = '$endereco'
          WHERE idCliente = $idCliente";

if ($conn->query($sql) === TRUE) {
    echo 'Update Realizado com sucesso';
}    
$conn->close();
		
?>