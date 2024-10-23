<?php
session_start();
require "koneksi.php";

if (isset($_POST['tambah'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);

    // Membuat query untuk menambahkan data pengguna ke database
    $sql = "INSERT INTO register (nama, password, email) VALUES ('$nama', '$password', '$email')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "
            <script>
                alert('Berhasil Registrasi!');
                document.location.href = 'lihat_data.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Gagal Registrasi: " . mysqli_error($conn) . "');
                document.location.href = 'lihat_data.php';
            </script>";
    }
}

function showRegistrationForm() {
    echo '
    <form action="" method="POST" class="register-form">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" name="tambah" value="Register">
    </form>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <section>
        <div class="register-container">
            <?php
            if (!isset($_SESSION['users'])) {
                $_SESSION['users'] = [];
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
                $nama = htmlspecialchars($_POST['nama']);
                $password = htmlspecialchars($_POST['password']);
                $email = htmlspecialchars($_POST['email']);

                $_SESSION['users'][$nama] = [
                    'password' => $password,
                    'email' => $email,
                ];

                echo "<h2>Halo, " . $nama . "!</h2>";
                echo "<p>Anda telah berhasil registrasi.</p>";
                echo "<p>Email: " . $email . "</p>";
                echo '<a href="login.php" class="home">Pergi ke Halaman Login</a>';
            } else {
                showRegistrationForm();
            }
            ?>
        </div>
    </section>

    <style>
        /* Style untuk keseluruhan halaman */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

section {
    width: 100%;
    max-width: 400px;
    margin: 20px;
}

/* Container untuk form registrasi */
.register-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.register-container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Style untuk form */
.register-form {
    display: flex;
    flex-direction: column;
}

.register-form label {
    margin-bottom: 8px;
    color: #555;
    font-weight: bold;
}

.register-form input[type="text"],
.register-form input[type="password"],
.register-form input[type="email"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
}

/* Style untuk tombol register */
.register-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.register-form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Link ke halaman login */
.home {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #4CAF50;
    text-decoration: none;
    font-weight: bold;
}

.home:hover {
    text-decoration: underline;
}

/* Responsive design */
@media (max-width: 600px) {
    .register-container {
        padding: 15px;
    }

    .register-form input[type="text"],
    .register-form input[type="password"],
    .register-form input[type="email"],
    .register-form input[type="submit"] {
        font-size: 14px;
    }
}

    </style>
</body>
</html>
