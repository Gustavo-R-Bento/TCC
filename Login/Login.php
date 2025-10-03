

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Nail</title>
    <link rel="stylesheet" href="Login.css">

</head>

<body>
    <div class="img-login">
            <img src="../img/img-login.png" alt="">
    </div>
    <main>

        <form method="POST" action="testLogin.php">
            <h1 class="txt-login">Login</h1>
            
            <div class="input-center">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="inp-email">
            </div>
            
            <div class="input-center">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="inp-senha">
            </div>
    
            
            <div class="input-btn">
                <input type="submit" value="Entrar" class="btn-cadastrar">
            </div>
            <p>Ainda não tem um cadastro?<a href="../Cadastro/Cadastro.php">Cadastre-se</a></p>
        </form>
        
    </main>
</body>
</html>