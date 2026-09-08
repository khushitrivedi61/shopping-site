<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':username' => $username,
            ':email'    => $email,
            ':password' => $password
        ]);
        echo "<div class='container'><p>✅ Registered successfully.</p><a href='login.php'>Login Now</a></div>";
        exit();
    } catch (PDOException $e) {
        echo "<div class='container'>❌ Error: " . $e->getMessage() . "</div>";
    }
}
?>

<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="username" required placeholder="Username"><br>
        <input type="email" name="email" required placeholder="Email"><br>
        <input type="password" name="password" required placeholder="Password"><br>
        <button type="submit">Register</button>
    </form>
    <a href="login.php">Already have an account?</a>
</div>
