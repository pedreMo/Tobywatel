<?php
session_start();

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
</head>
<body>
    <h2>Witaj, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Jesteś zalogowany/a do systemu.</p>
    <a href="logout.php">Wyloguj się</a>
</body>
</html>
