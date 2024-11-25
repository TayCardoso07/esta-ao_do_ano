<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estação do ano</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        padding: 20px;
        margin: 0;
        transition: backgound-color 0.5s ease;
        background-color: #33CCFF;
    }
    img{
        max-width: 300px;
        margin-top: 20px;
    }
    </style>
</body style="background-color:
 <?php

echo isset($_POST['cor_fundo']) ? $_POST['cor_fundo'] : '#33CCFF';
?>">

    <h1> Identifique a estação do ano</h1>
    <form method="POST" action="../estaçao_do_ano/">
        <label for="data">Selecione um data:</label>
        <input type="date" id="data" name="data" required>
        <button type="submit">Ver estação</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['data'])) {
        $data = $_POST ['data'];
        $dia =(int)date('d', strtotime('data'));
        $mes = (int)date('m', strtotime($data));

        $estacao =' ';
        $imagem ='';
        $corFundo ='';

        if(($mes== 12 && $dia >= 21) || $mes == 1 || $mes == 2 || ($mes == 3 && $dia<20)) {
            $estacao = 'Verão';
            $imagem ='https://www.acidadeon.com/tudoep/wp-content/uploads/sites/10/2024/02/WhatsApp-Image-2024-02-29-at-18.14.15-1296x700.jpg';
            $corFundo ='#FFF44F';
        }elseif(($mes== 3 && $dia >= 20) || $mes == 4 || $mes == 5 || ($mes == 6 && $dia<21)) {
            $estacao = 'Outono';
            $imagem ='https://static.mundoeducacao.uol.com.br/mundoeducacao/conteudo/outono(1).jpg';
            $corFundo ='#D78F77';
        }
            elseif(($mes== 6 && $dia >= 21) || $mes == 7 || $mes == 8 || ($mes == 9 && $dia<23)) {
            $estacao = 'Inverno';
            $imagem ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPisRYsOtlGGqKjSc8ZdyvAU_qN7RaWtx7uQ&s';
            $corFundo ='#D3D3D3';
            }
        elseif(($mes== 9 && $dia >= 23) || $mes == 10 || $mes == 11 || ($mes == 12 && $dia<21)) {
            $estacao = 'Primavera';
            $imagem ="'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPruwkjJwbqepuC5Lq5a1uQMtPLOKOSbb67g&s'";
            $corFundo ='#FFB6C0';
        }

        echo "<script>
            document.body.style.backgroundColor = '$corFundo';
        </script>";


    echo "<h2>Estação: $estacao</h2>";
    echo "<img src=$imagem alt='Imagem da estação:' $estacao>";
    echo "<form method='POST' action='../estaçao_do_ano/'><input type='hidden' name='cor_fundo' value= $corFundo></form>";
}
?>
</body>
</html>
            
            