<?php
include 'db.php';
include 'header.php';

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = trim($_POST['message']);
    if (!empty($message)) {
        // Insertion du message dans la base de données avec le nom d'utilisateur de la session
        $stmt = $pdo->prepare('INSERT INTO messages (username, message) VALUES (?, ?)');
        $stmt->execute([$_SESSION['username'], $message]);
        header('Location: index.php');
        exit();
    } else {
        echo "Le message ne peut pas être vide.";
    }
}
?>

<form method="post">
    <label for="message">Votre message :</label>
    <textarea id="message" name="message" required></textarea>
    <button type="submit">Envoyer</button>
</form>

<?php include 'footer.php'; ?>
