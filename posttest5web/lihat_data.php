<?php
session_start();
require "koneksi.php";

// Query untuk mengambil semua data pengguna dari tabel "regis"
$sql = "SELECT id_pengguna, nama, email FROM regis";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Pengguna</title>
    <link rel="stylesheet" href="lihat_data.css">
</head>
<body>
    <section>
        <div class="data-container">
            <h2>Daftar Pengguna Terdaftar</h2>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Pengguna</th>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo $row['id_pengguna']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Tidak ada data pengguna yang ditemukan.</p>
            <?php endif; ?>

            <a href="register.php" class="back-link">Kembali ke Halaman Registrasi</a>
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
    max-width: 600px;
    margin: 20px;
}

/* Container untuk data pengguna */
.data-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.data-container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Tabel data */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #4CAF50;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #ddd;
}

/* Link kembali ke registrasi */
.back-link {
    display: block;
    text-align: center;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border-radius: 4px;
    text-decoration: none;
}

.back-link:hover {
    background-color: #45a049;
}

    </style>
</body>
</html>

<?php
// Menutup koneksi
mysqli_close($conn);
?>
