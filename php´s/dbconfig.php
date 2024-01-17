<?php    
	include 'conexao.php' ;

	$t_email = $_POST['email']; 
        $t_idade = $_POST['idade'];
	$t_morada = $_POST['morada'];  
	$t_nome = $_POST['nome'];   
	$t_n_camisola = $_POST['n_camisola'];   
	$posicao = $_POST['posicao'];  
    $con = mysqli_connect($host,$user,$password,$db_name);
    $Sql_Query = "insert into jogador (email, idade, morada, nome, n_camisola, posicao) values ('$t_email','$t_idade','$t_morada','$t_nome','$t_n_camisola','$posicao')";    
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