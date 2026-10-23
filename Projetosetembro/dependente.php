<?php

    include ('conexao.php'); // Conecta esta página ao bando de dados

    if ($_SERVER["REQUEST_METHOD"]=="POST") // O insert vai registrar no banco de dados, o php é apenas um intermediário entre o front end e o banco de dados
    {
        $nome=$_POST['txtNome'];
        $nascimento=$_POST['txtData'];
        $id=$_POST['txtassociado']; // Esse $_POST, é pra pegar os dados que a pessoa digitou lá no html e grava dentro da variável
        $inserir="insert into dependente(nome, nascimento, id_associado) values('$nome', '$nascimento', '$id')"; // Ele grava o valor do txtnome ou um dos 3, no banco como o nome da variável
        $executar = mysqli_query($con,$inserir); // Comando do php para executar qualquer sql
                                                 // Esse $con, é o nome que foi determindado para a conexao do banco de dados no conexao.php

        if ($executar)
        {
            echo "Usuário cadastrado com sucesso ";
        }
        else
        {
            echo "Erro ao cadastrar".mysqli_error($con);
        }
    mysqli_close($con);
    
    }               

?>