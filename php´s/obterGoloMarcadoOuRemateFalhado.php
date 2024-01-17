<?php 
 
include 'conexao.php';
 
 //connecting to database and getting the connection object
$conn = mysqli_connect($host,$user,$password,$db_name);
 
$qry="select * from acoes where id_jogo=(SELECT COUNT(*) FROM jogos) and (tipo='Golo Marcado' or tipo='Remate Falhado') ";

$raw=mysqli_query($conn,$qry);

while($res=mysqli_fetch_array($raw))
{
	$data[]=$res;
}
print(json_encode($data));
?>