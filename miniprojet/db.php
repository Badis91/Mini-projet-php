<?php
// Informations de connexion
$host = 'localhost';
$dbname = 'miniprojet'; // Utilisation de votre base de données "miniprojet"
$username = 'root';    // Nom d'utilisateur MySQL (par défaut sous WAMP)
$password = '';        // Mot de passe MySQL (vide par défaut sous WAMP)

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Définir le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // Afficher un message en cas d'erreur
    die("Erreur de connexion : " . $e->getMessage());
}
?>
