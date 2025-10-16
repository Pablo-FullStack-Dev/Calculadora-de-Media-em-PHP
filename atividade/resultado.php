<?php

    $informacoes = array();

    $nome = isset($_POST['nome']) && $_POST !== '' ? $_POST['nome'] : null;
    $x = (float) isset($_POST['x']) && $_POST !== '' ? $_POST['x'] : null;
    $y = (float) isset($_POST['y']) && $_POST !== '' ? $_POST['y'] : null;
    $z = (float) isset($_POST['z']) && $_POST !== '' ? $_POST['z'] : null;
    $media = ($x + $y + $z) / 3;
    $resultado = number_format($media, 2, '.', ''); // mostra 2 casas decimais

    $situacao = null;
    if($resultado < 5){
        $situacao = "REPROVADO";
    }else if($resultado = 5){
        $situacao = "CONCELHO";
    } else if($resultado > 5){
        $situacao = "APROVADO";
    } else{
        $situacao = "NOTA NÃO DOCUMENTADA";
    }


    echo "<br>". $nome ."<br>". $x ."<br>". $y . "<br>". $z . "<br>";
    if( $nome !== null && $x!==null && $y!==null && $z!==null){
        $informacoes = array(
            "nome" => $nome,
            "x"=> $x, 
            "y"=> $y,
            "z" => $z,
            "resultadop" => ($x+$y+$z) / 3
        );
    }else{
        $informacoes = array(
            "nome" => "sem dados",
            "x"=> "sem dados", 
            "y"=> "sem dados",
            "z" => "sem dados"
        );
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <section>
            <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>total</th>   
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                        echo $nome; 
                    ?>
                </td>
                <td>
                    <?php
                        echo $x; 
                    ?>
                </td>
                <td>
                    <?php
                        echo $y; 
                    ?>
                </td>
                <td>
                    <?php
                        echo $z; 
                    ?>
                </td>
                <td>
                    <?php
                        echo $resultado; 
                    ?>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php
                        echo "situação:". $situacao; 
                    ?>
                </td>
            </tr>

        </tfoot>
    </table>
        </section>
    </main>
</body>
</html>