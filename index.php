<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>Zaloguj się</h2>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: red;'>Nieprawidłowy login lub klucz autoryzacyjny.</p>";
    }
    ?>

    <form method="POST" action="login.php">
        <label>Login: <input type="text" name="username" required></label><br><br>
        <label>Klucz: <input type="password" name="password" required></label><br><br>
        <button type="submit">Zaloguj</button>
    </form>
</body>
</html>
