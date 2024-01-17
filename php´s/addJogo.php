<?php    
	include 'conexao.php' ;

	$id_jogo = $_POST['id_jogo']; 
        $data = $_POST['data'];
	
    $con = mysqli_connect($host,$user,$password,$db_name);
    $Sql_Query = "insert into jogos (id_jogo, data_jogo) values ('$id_jogo','$data')";    
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