<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Seguro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div id="loader" class="loader-wrapper">
        <div class="spinner"></div>
        <p style="letter-spacing: 2px; font-weight: 300;">VERIFICANDO...</p>
    </div>

    <div class="glass-card">
        <h2>Área Restrita</h2>
        <p>Identifique-se para acessar os dados.</p>
        
        <form action="login.php" method="POST" onsubmit="showLoader()">
            <input type="password" name="password" placeholder="Senha de acesso" required autofocus>
            <button type="submit">Entrar no Sistema</button>
        </form>

        <?php if(isset($_GET['erro'])): ?>
            <div class="error-msg">Acesso negado. Senha incorreta.</div>
        <?php endif; ?>
    </div>

    <script>
        function showLoader() {
            document.getElementById('loader').style.display = 'flex';
            document.querySelector('.glass-card').style.opacity = '0';
        }
    </script>
</body>
</html>