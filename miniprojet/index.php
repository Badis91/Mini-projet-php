<?php
include 'db.php';
include 'header.php';

// Récupération de tous les messages de la base de données, triés par ordre chronologique décroissant
$stmt = $pdo->query('SELECT * FROM messages ORDER BY created_at DESC');
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Messages :</h2>
<?php foreach ($messages as $message): ?>
    <div class="message">
        <strong><?= htmlspecialchars($message['username']); ?>:</strong>
        <p><?= htmlspecialchars($message['message']); ?></p>
        <small><?= $message['created_at']; ?></small>
    </div>
<?php endforeach; ?>

<!-- Lien vers la page de soumission de message si l'utilisateur est connecté -->
<?php if (isset($_SESSION['username'])): ?>
    <a href="post_message.php">Écrire un nouveau message</a>
<?php endif; ?>

<?php include 'footer.php'; ?>
