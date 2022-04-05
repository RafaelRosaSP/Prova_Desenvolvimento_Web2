<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando Cadastros</title>
</head>
<body>
<?php


    $arq    = "dados_enviados.txt";
    $nome   = '';
    $sug    = '';
    $duv    = ''; 



    if(!file_exists($arq))
        $file = fopen($arq, "w");
    else 
        $file = fopen($arq, "r");

    while(!feof($file)) 
    {
        $line = fgets($file);
        

        if (stristr($line, 'Nome:'))
            $nome = substr($line, 5, strlen($line)-6);
        if (stristr($line, 'Sug:'))
            $sug = substr($line, 4, strlen($line)-5);
        if (stristr($line, 'Duv'))
            $duv = substr($line, 4, strlen($line)-5);
        {
            
            echo $nome.' | '.$sug.' | '.$duv.'<br>';
            
            $nome   = '';
            $sug    = '';
            $duv   = '';
    
        }
        }
?>
    <p>
        <a href="bem_vindo.php" class="btn btn-danger">Voltar</a>
    </p>

</body>
</html>