<?php
session_start();

// CONFIGURAÇÃO
$senha_mestra = "suasenha123"; // Mude para a sua senha
$url_sucesso = "dashboard.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pequeno delay para o loader ser visível (opcional)
    usleep(800000); 

    $senha_digitada = $_POST['password'] ?? '';

    if ($senha_digitada === $senha_mestra) {
        $_SESSION['usuario_autorizado'] = true;
        header("Location: " . $url_sucesso);
        exit();
    } else {
        header("Location: index.php?erro=1");
        exit();
    }
}
?>