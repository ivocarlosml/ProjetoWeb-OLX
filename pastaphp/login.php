<!DOCTYPE html>
<html>
<head>
    <title>Griv - Login</title>
    <link rel="stylesheet" href="../pastaestilo/estilologin.css">
</head>
<body>
    
    <div class="container">
        <div class="image">
            <img src="../pastaimagens/GRIV.png">
        </div>
        <h1>Acesse sua conta</h1>
        <form action="login.php" method="post">
            <label>E-mail:
                <input type="email" name="email" placeholder="Usuário">
            </label>
            <label>Senha:
                <input type="password" name="senha" placeholder="Senha">
            </label>
                <button type="submit">Entrar</button>
         </form>
        <div class="ou-conecte">
            <span>Ou conecte com:</span>
        </div>
        <div class="com">
                <a href="https://google.com/"><img src="../pastaimagens/google.png"></a>
                <a href="https://instagram.com/"><img src="../pastaimagens/instagram.png"></a>
                <a href="https://facebook.com/"><img src="../pastaimagens/facebook.png"></a>
        </div>
        <div class="nao-tem-conta">
            <span>Não tem uma conta?</span>
            <a href="login.php">Cadastre-se</a>
        </div>
        <div class="preciso-ajuda">
            <span>Preciso de ajuda</span>
        </div>

    </div>
        <div class="termos-politica">
            <span>Ao continuar, você concorda com os</span>
            <span>Termos de Uso e a Política de Privacidade da GRIV,</span>
            <span>e também, em receber comunicações via e-mail e push</span>
            <span>da GRIV e seus parceiros.</span>
        </div>
</body>
</html>
