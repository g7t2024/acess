<?php
session_start();
if (!isset($_SESSION['usuario_autorizado']) || $_SESSION['usuario_autorizado'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-dash {
            background: white; color: #1e293b;
            padding: 40px; border-radius: 20px;
            width: 90%; max-width: 600px;
            animation: fadeIn 1s ease;
        }
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }
        .btn-logout { background: #f1f5f9; color: #64748b; margin-top: 20px; text-decoration: none; display: inline-block; padding: 10px 20px; border-radius: 8px; font-weight: 600; }
        .btn-logout:hover { background: #fee2e2; color: #ef4444; }
    </style>
</head>
<body style="background: #f1f5f9;">
    <div class="container-dash">
        <h1 style="margin-bottom: 10px;">Acesso Confirmado. ✅</h1>
        <p style="color: #64748b;">Este é o seu painel seguro. Ninguém pode acessar esta página sem a senha.</p>
        <hr style="margin: 25px 0; border: 0; border-top: 1px solid #e2e8f0;">
        <a href="logout.php" class="btn-logout">Encerrar Sessão</a>
    </div>
</body>
</html>