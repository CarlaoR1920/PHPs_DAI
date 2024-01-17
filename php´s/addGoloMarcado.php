<?php    
	include 'conexao.php' ;

	$local = $_POST['local'];
	$tipo = $_POST['tipo'];  
	$zona_baliza = $_POST['zona_baliza'];   
	$jogador = $_POST['jogador'];   
	$tempo = $_POST['tempo'];  
	$id_jogo = $_POST['id_jogo'];
	$assistencia = $_POST['assistencia'];
    $con = mysqli_connect($host,$user,$password,$db_name);
    $Sql_Query = "insert into acoes (id_jogo, tipo, local, zona_baliza, jogador, tempo, assistencia) values ('$id_jogo','$tipo','$local','$zona_baliza','$jogador','$tempo','$assistencia')";    
    if(mysqli_query($con,$Sql_Query))    
    {    
        echo "Data inserted successfully....";    
    }    
    else     
    {    
        echo "some error occured";    
    }    
    mysqli_close($con);    
    ?>