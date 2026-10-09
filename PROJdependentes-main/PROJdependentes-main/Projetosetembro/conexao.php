<?php


$hostname = "localhost";
$username = "root";
$password = "";
$bdname = "clube_b";

$con = mysqli_connect($hostname,$username,$password,$bdname); //Variável para conexão com o banco de dados, conecta as variveis ao bano de dados
$sen = mysqli_connect($hostname,$username,$password,$bdname);
if ($con){

    echo "";

}
else{

    die("Conexão falhou!".mysqli_connect_error()); 

}

?>