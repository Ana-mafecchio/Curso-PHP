<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    $arrayMulheres = [

    ['Ada Lovelace','ada-lovelace.webp','Considerada a primeira programadora da história, Ada Lovelace trabalhou no século XIX com a máquina analítica de Charles Babbage. Ela criou o primeiro algoritmo voltado para processamento por uma máquina, antecipando conceitos da computação moderna muito antes de existirem computadores.'],
    ['Grace Hopper','grace-hopper.webp','Grace Hopper foi uma pioneira da computação e oficial da Marinha dos EUA. Desenvolveu o primeiro compilador e contribuiu para a criação da linguagem COBOL. Popularizou a ideia de linguagens de programação mais acessíveis, aproximando humanos e máquinas.'],
    ['Dorothy Vaughan','dorothy-vaughan.png','Dorothy Vaughan foi matemática e programadora da NASA, destacando-se como líder e especialista em FORTRAN. Trabalhou no cálculo de trajetórias espaciais e foi fundamental na transição da computação manual para sistemas automatizados.'],
    ['Marissa Mayer','marissa-mayer1.png','Marissa Mayer foi uma das primeiras engenheiras do Google, contribuindo para produtos como busca e Gmail. Posteriormente, tornou-se CEO do Yahoo, sendo uma das mulheres mais influentes na tecnologia e liderança corporativa.'],
    ['Margaret Hamilton','margareth-hamilton.webp','Margaret Hamilton liderou o desenvolvimento do software de voo das missões Apollo da NASA. Seu trabalho foi essencial para o sucesso da Apollo 11. Ela também ajudou a definir o conceito de engenharia de software como uma disciplina rigorosa.'],
   
    ]
    
    ?>

    <div class="galeria">
        
        <?php /*cada item é o conjunto de informações de uma mulher*/  ?>
        <div class="item">
          <img src="<?php echo $arrayMulheres [0][1] ?>">
          <h3><?php echo $arrayMulheres [0][0] ?></h3> 
          <p><?php echo $arrayMulheres [0][2] ?></p>
        </div> 
        <div class= "item" >
            <img src="<?php echo $arrayMulheres [1][1] ?>" >
            <h3><?php echo $arrayMulheres [1][0] ?></h3>
            <p><?php echo $arrayMulheres [1][2] ?></p>
        </div>
        <div class="item">
          <img src="<?php echo $arrayMulheres [2][1] ?>">
          <h3><?php echo $arrayMulheres [2][0] ?></h3> 
          <p><?php echo $arrayMulheres [2][2] ?></p>
        </div> 
        <div class= "item" >
            <img src="<?php echo $arrayMulheres [3][1] ?>" >
            <h3><?php echo $arrayMulheres [3][0] ?></h3>
            <p><?php echo $arrayMulheres [3][2] ?></p>
        </div>
        <div class= "item" >
            <img src="<?php echo $arrayMulheres [4][1] ?>" >
            <h3><?php echo $arrayMulheres [4][0] ?></h3>
            <p><?php echo $arrayMulheres [4][2] ?></p>
        </div>
        
    </div>
    
</body>
</html>