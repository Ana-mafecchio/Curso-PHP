<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno:</title>
</head>
<body>
    <form action="aluno-cadastro.php" method="post">
    <label>RA</label>
    <input type="text" name="ra"><br>
    <label>Nome:</label><br>
    <input type="text" name="nome"><br>
    <label>Idade</label><br>
    <input type="number" name="idade"><br>
    
     <button type="submit" class="btn btn-primary mt-2" >Salvar</button>   
     <button type="reset" class="btn btn-success mt-2" >Limpar</button>  

    </form>
</body>
</html>