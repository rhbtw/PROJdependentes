<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Dependentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include('conexao.php');
        $consulta="select * from associado";
        $executar_consulta=mysqli_query($con,$consulta);


        ?>
   <form action="dependente.php" method="POST" class="border p-5 text-center">

        <h1 class="text-center fw-light">Cadastro de associados</h1>
        <br>
        Digite seu nome:<input type="text" name="txtNome"><br>
        Digite sua data de nascimento:<input type="text" name="txtData"><br>
 
        ID associado:<select name="txtassociado">
                        <?php
                            while($vetor=mysqli_fetch_array($executar_consulta)){
                                echo "<option value='".$vetor['id']."'>".$vetor['nome']."</option>";
                            }
                            ?>
                            
                            
        </select>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="Reset" value="Cancelar" class="btn btn-danger">
    </form>


</body>
</html>