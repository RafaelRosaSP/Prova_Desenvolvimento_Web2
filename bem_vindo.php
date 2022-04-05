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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Muito bem vindo ao cadastro de dúvidas do curso DSM</h1>
    </div>
    <p> 
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        -->

        <br> <br>
        <br> <br>
        <a href="cadastrar.php">Cadastre suas dúvidas</a>
        <br> <br>
        <a href="listacadastros.php">Visualizar cadastros</a>
        <br> <br>
        <br> <br>
        <br> <br>
        <a href="logout.php">Sair da conta</a>
    </p>
</body>
</html>