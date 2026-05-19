<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eventos:</title>
</head>
<body>
    <form action="eventos-cadastro.php" methd="post">
        <label>Nome</label>
        <input type="text" name="nome"><br>
        <label>Tipo:</label><br>
        <select name="eventos" id="eventos"><br>
            <option value="animefest">Anime Fest</option>
            <option value="animefriends">Anime Friends</option>
        </select><br>
        <label>Descrição:</label>
        <input type="text" name="descricao">

         <button type="submit" class="btn btn-primary mt-2" >Salvar</button>    
         <button type="reset" class="btn btn-success mt-2" >Limpar</button> 

    </form>
    <?php
    $arquivo = fopen("eventos_db.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha<br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>