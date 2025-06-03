<?php
// Simulasi register (belum pakai database)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simpan sementara ke file (atau nanti ke DB)
    file_put_contents('users.txt', "$username|$password\n", FILE_APPEND);
    header("Location: login.php");
    exit();
}
?>

<form method="POST">
  <h2>Register</h2>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Register</button>
</form>
<a href="login.php">Sudah punya akun? Login</a>
