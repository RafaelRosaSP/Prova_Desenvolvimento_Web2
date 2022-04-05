<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber informações</title>
</head>
<body>
<?php
        
    if((ISSET($_POST['nome'])) and (ISSET($_POST['sug'])) and (ISSET($_POST['sug']))) 

        {
            $nome= $_POST['nome'];
            $sug= $_POST['sug'];
            $duv= $_POST['duv'];
        }

        {
        
            echo '<br><br> Dúvida e Sugestão Cadastradas com Sucesso!! '.' <br>'; echo '<br>';
            echo 'Nome: ' , $nome; echo '<br>';
            echo 'Sugestão: ', $sug; echo '<br>';
            echo 'Dúvidas: ', $duv; echo '<br>';
            $arq = "dados_enviados.txt";

        if(!file_exists("dados_enviados.txt"))
        

        {
            $handle = fopen("dados_enviados.txt", "w");
        }     
        
        else 
        
        {
            $handle = fopen("dados_enviados.txt", "a");
        }
            
            fwrite($handle, "NOME:".$nome."\n");
            fwrite($handle, "Duv:".$duv."\n");
            fwrite($handle, "Sug:".$sug."\n");
            
            fwrite($handle,"\n");
            fflush($handle);
            fclose($handle);
    
        }
    
?>
</body>
</html>