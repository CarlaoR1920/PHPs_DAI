<?php 
 
include 'conexao.php';
 
 //connecting to database and getting the connection object
$conn = mysqli_connect($host,$user,$password,$db_name);

$t_id = $_POST['id_jogador'];
$convocado = $_POST['convocado'];


 
$sql = "UPDATE jogador SET  convocado='$convocado' WHERE id_jogador='$t_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>