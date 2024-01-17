<?php 
 
include 'conexao.php';
 
 //connecting to database and getting the connection object
$conn = mysqli_connect($host,$user,$password,$db_name);

$t_id = $_POST['id_jogador'];
$t_email = $_POST['email']; 
$t_idade = $_POST['idade'];
$t_morada = $_POST['morada'];  
$t_nome = $_POST['nome'];   
$t_n_camisola = $_POST['n_camisola'];
$posicao = $_POST['posicao']; 
 
$sql = "UPDATE jogador SET nome='$t_nome', idade='$t_idade', morada='$t_morada ', email='$t_email', n_camisola='$t_n_camisola', posicao='$posicao' WHERE id_jogador='$t_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>