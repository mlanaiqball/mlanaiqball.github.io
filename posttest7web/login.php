<?php
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh data pengguna (Anda bisa menggantinya dengan database)
    $stored_username = 'admin';
    $stored_password = 'password123';

    // Verifikasi username dan password
    if ($username === $stored_username && $password === $stored_password) {
        // Jika login sukses
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Jika login gagal
        $message = 'Invalid login credentials';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>Login</h2>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <style>
   /* CSS untuk Form Login */
.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container label {
    margin-bottom: 10px;
    color: #555;
    font-weight: bold;
}

.login-container input {
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    outline: none;
    width: 100%; /* Set both fields to be 100% of the container's width */
    box-sizing: border-box; /* Ensure padding is included within the width */
}

.login-container input:focus {
    border-color: #4CAF50;
}

.login-container button {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    width: 100%; /* Make button full width */
}

.login-container button:hover {
    background-color: #45a049;
}

/* Responsive Layout */
@media (max-width: 500px) {
    .login-container {
        padding: 20px;
        max-width: 100%;
    }
}

    </style>
</body>
</html>
