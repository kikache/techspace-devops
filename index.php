<?php
session_start();
$_SESSION['visits'] = ($_SESSION['visits'] ?? 0) + 1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body style="font-family: Arial; padding: 20px; background-color: #f4f4f4;">
    <h1>Welcome to My Website</h1>
    <p>You have visited this page <strong><?= $_SESSION['visits'] ?></strong> times.</p>
    <p>Current time: <strong><?= date('Y-m-d H:i:s') ?></strong></p>

    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <button type="submit">Submit</button>
    </form>

    <?php if (isset($_POST['name'])): ?>
        <p>Hello, <strong><?= htmlspecialchars($_POST['name']) ?></strong>!</p>
    <?php endif; ?>

    <footer>&copy; <?= date('Y') ?> My Website</footer>
</body>
</html>
