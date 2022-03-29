<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: left; padding: 20px; }
        label {
            display: inline-block;
            margin-bottom: .5rem;
            font-size: 12px;
            width:100%;
        }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Cadastre sua dúvida e uma sugestão.</h1>
    </div>
    <p>
    <form action="enviar.php" method="post"> 
        <label class="contro-label small" for="nome">Nome:</label>
        <input type="text" id="name" name="nome"><br><br>
        <label class="contro-label big" for="duv">Dúvida:</label>
        <input type="text" id="duv" name="duv"><br><br>
        <label for="sug">Sugestão:</label>
        <input type="text" id="sug" name="sug"><br><br>
        <input type="submit" value="Enviar">
    </form>
        <br> <br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>