<?php 
header("Access-Control-Allow-Origin: *");
include_once 'conexao.php';

$email	= $_POST['email'];
$senha	= $_POST['senha'];
$senha  = md5($senha);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tab_user WHERE email='$email' and senha='$senha'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user['idUser'] = $row['idUser'];
        $user['primeiro_nome']   = $row['primeiro_nome'];
        $user['email']  = $row['email'];

    }
    

} else {
    $user['idUser'] = 0;
}
$conn->close();

$user = implode(',', $user);

echo $user;
?>