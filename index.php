<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'rafael' and $_POST['password'] == 'mudar123'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Rafael Rosa';
         header("location: bem_vindo.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: left; }
        .area{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="area">
        <h2>LOGIN</h2>
        <p>Por favor, inserir suas credênciais.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div >
                <input type="submit"  value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>