<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Livre d'or</h1>
        <?php session_start(); ?>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Bonjour, <?= htmlspecialchars($_SESSION['username']); ?> | <a href="logout.php">Déconnexion</a></p>
        <?php else: ?>
            <a href="login.php">Connexion</a> | <a href="register.php">Inscription</a>
        <?php endif; ?>
    </header>
