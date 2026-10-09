<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homem aranha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <br>
    <h1 class="text-center">Consulta de Associados</h1>
<?php
    include('conexao.php');

    $consulta="select * from associado";
    $executar_consulta=mysqli_query($con, $consulta);
    if($executar_consulta){
        echo "<table class='table'>";
        echo "<tr>"; //Criar a primeira linha da nossa tabela (table row) e abre a tag <tr>
        echo "<td>Código</td>";
        echo "<td>Nome</td>";
        echo "<td>E-mail</td>";
        echo "<td>Data de nascimento</td>";
        echo "</tr>";// Fecha a tag <tr>
        while($vetor=mysqli_fetch_array($executar_consulta))
        {
            echo "<tr>"; //Criar a primeira linha da nossa tabela (table row) e abre a tag <tr>
            echo "<td>".$vetor['id']."</td>";
            echo "<td>".$vetor['nome']."</td>";
            echo "<td>".$vetor['email']."</td>";
            echo "<td>".$vetor['nascimento']."</td>";
            echo "</tr>";// Fecha a tag <tr>
        }

        echo"</table>";

    }
    
    mysqli_close($con);

?>




</body>
</html>