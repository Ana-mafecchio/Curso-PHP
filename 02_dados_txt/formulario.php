<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de ....</title>
</head>
<body>
    <h1>Cadastro de Gatos</h1>
    <form action="cadastrar.php" method="post">
     <label>Nome:</label>
     <input type="text" name="nome_do_gato"><br>
     <label>Idade:</label>
     <input type="number" name="idade"><br>
     <label>Castrado:</label><br>
     <input type="radio" name="castrado" value="sim">
     <label>SIM</label>
     <input type="radio"name="castrado" value="nao">
     <label>NÃO</label><br>
     <label>Possui alguma doença?</label>
     <input type="text" name="possui_doenca"><br>


    <button type="submit">Salvar</button>
     
     <button type="reset">Limpar</button>   
    </form>
</body>
</html>