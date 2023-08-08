<?php 
header("Access-Control-Allow-Origin: *");
include_once 'conexao.php';

$idUser                   = $_POST['idRepresentante'];
$tipo                     = $_POST['tipo'];
$primeiro_nome	          = $_POST['primeiro_nome'];
$segundo_nome             = $_POST['segundo_nome']; 
$email	                  = $_POST['email'];
$telefone                 = $_POST['telefone'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE tab_user
            SET 
                tipo            = '$tipo',
                primeiro_nome   = '$primeiro_nome', 
                segundo_nome    = '$segundo_nome', 
                email           = '$email', 
                telefone        = '$telefone'
            WHERE 
                idUser = '$idUser'";

if ($conn->query($sql) === TRUE) {
    echo 'Update Realizado com sucesso';
}    
$conn->close();
		
?>