<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Álbum:</title>
</head>
<body>
    <form action="album-cadastro.php" method="post">
    <label>Artista:</label>
    <input type="text" name="nome_artista"><br>
    <label>Nome do Álbum:</label>
    <input type="text" name="nome_do_album"><br>
    <label>Ano de lançamento: </label>
    <input type="number" name="ano"><br>

     <button type="submit" class="btn btn-primary mt-2" >Salvar</button>    
     <button type="reset" class="btn btn-success mt-2" >Limpar</button> 

    </form>   

    <hr>
    <h2>Listagem de albúns</h2>
    <?php
    
    $arquivo = fopen("album_db.txt", "r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha<br>";
    }
    fclose($arquivo);
    ?>
</body>
</html>