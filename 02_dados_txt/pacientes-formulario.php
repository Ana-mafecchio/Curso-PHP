<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pacientes:</title>
</head>
<body>
    <form action="pacientes-cadastro.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome"><br>
        <label>Telefone:</label><br>
        <input type="tel" name="telefone"><br>
        <label>Cidade</label><br>
                <input type="text" name="cidade"><br>
                <label>Estado</label><br>
                <select name="uf_paciente">
                    <option value="AC">AC</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="PA">PA</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="TO">TO</option>

                    <option value="AL">AL</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="MA">MA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RN">RN</option>
                    <option value="SE">SE</option>

                    <option value="DF">DF</option>
                    <option value="GO">GO</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>

                    <option value="ES">ES</option>
                    <option value="MG">MG</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>

                    <option value="PR">PR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                </select><br>
        <label>Fumante:</label><br>
        <input type="radio" name="fumante" value="sim">
        <label>SIM</label>
        <input type="radio"name="fumante" value="nao">
        <label>NÃO</label><br>
    </form>
</body>
</html>