<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Formulário de contato</title>
</head>
<body>
    <nav>
        <a href="../index.html"><img class="logo" src="../images/logo.svg" alt="logo"></a>
        <ul class="nav_links">
            <li><a href="../pages/animais.html">Animais</a></li>
            <li><a href="../pages/direitos_deveres.html">Direitos e deveres</a></li>
            <li><a href="../pages/doacao.html">Doações</a></li>
            <li><a href="../form.php">Contato</a></li>
        </ul>
    </nav>

    <main class="content">
        <form action="" method="post">
            <h1>Formulário de contato</h1>

            <label id="p1">Nome completo</label>
            <input type="text" name="p1" id="ip1" placeholder="Nome completo...">

            <label id="p2">E-mail</label>
            <input type="email" name="p2" id="ip2" placeholder="E-mail...">

            <label id="p2">Deixe sua mensagem</label>
            <textarea placeholder="Mensagem..." cols="30" rows="5" id="msg"></textarea>
            <p id="result">0/700</p>

            <input type="submit" value="Enviar" id="btn">
        </form>
    </main>

    <footer>
        <ul class="footer_links">
            <li><a href="">Nome/logo</a></li>
            <li><a href="">Animais</a></li>
            <li><a href="">Direitos e deveres</a></li>
            <li><a href="">Doações</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
    </footer>

    <script src="../js/limit.js"></script>
</body>
</html>