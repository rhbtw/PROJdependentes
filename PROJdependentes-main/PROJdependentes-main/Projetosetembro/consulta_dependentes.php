<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Associados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Consulta de dependentes</h1>  
    <?php
    include('conexao.php');
    $consulta="select dependente.*,asssociado.nome as associado from dependente inner join associado where on dependente.id_associado=associado.id";
    $executar_consulta=mysqli_query($con,$consulta);
    if($executar_consulta){
       echo "<table class='table'>";
       echo "<tr>";
       echo "<th>codigo</th>";
       echo "<th>nome</th>";
       echo "<th>data de nascimento</th>";
       echo "</tr>";
       while($vetor=mysqli_fetch_array($executar_consulta)){
       echo "<tr>";
       echo "<td>".$vetor['id_associado']."</td>";
       echo "<td>".$vetor['nome']."</td>";
       echo "<td>".$vetor['associado']."</td>";
       echo "<td>".$vetor['nascimento']."</td>";
       echo "</tr>";
       }

    }

       ?>


</body>
</html>