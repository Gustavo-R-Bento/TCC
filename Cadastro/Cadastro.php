
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Nail</title>
    <link rel="stylesheet" href="cadastro.css">

</head>

<body>
    <div class="img-login">
            <img src="../img/img-login.png" alt="">
    </div>
    <main>

        <form method="POST" action="processaCad.php">
            <h1 class="txt-login">Cadastre-se</h1>
            
            <div class="input-doble">
                <div class="input-left">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="inp-nome" required>
                </div>
                <div class="input-right">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" class="inp-sobrenome" required>
                </div>
            
            </div>
            
            <div class="input-center">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="inp-email" required>
            </div>
            <div class="input-doble">
                <div class="input-left">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="inp-cpf" maxlength="15" required>
                </div>
            
                <div class="input-right">
                    <label for="tel">Telefone</label>
                    <input type="text" name="tel" id="tel" class="inp-tel" maxlength="18" required>
                </div>
            </div>
            
            <div class="input-center">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="inp-senha" require>
            </div>
            
            
            
            <div class="input-btn">
                <input type="submit" name="submit" value="Cadastrar" class="btn-cadastrar">
            </div>
            <p>Já tem um cadastro?<a href="../Login/Login.php">Entre</a></p>
        </form>
        
    </main>
</body>
</html>
