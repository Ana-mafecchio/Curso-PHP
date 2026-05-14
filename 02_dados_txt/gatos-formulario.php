<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ....</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
    <div class="row align-items-center"> 
        <span class="border">
    <h1>Cadastro de Gatos</h1>
    <form action="gato-cadastrar.php" method="post">
     <label>Nome:</label><br>
     <input type="text" name="nome_do_gato"><br>
     <label>Idade:</label><br>
     <input type="number" name="idade"><br>
     <label>Castrado:</label><br>
     <input type="radio" name="castrado" value="sim">
     <label>SIM</label>
     <input type="radio"name="castrado" value="nao">
     <label>NÃO</label><br>
     <label>Possui alguma doença?</label><br>
     <input type="text" name="possui_doenca"><br>


    <button type="submit" class="btn btn-primary mt-2" >Salvar</button>   
     <button type="reset" class="btn btn-success mt-2" >Limpar</button>   
    </form>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>