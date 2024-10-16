<?php
// Batasan ukuran file (dalam byte)
$maxFileSize = 2 * 1024 * 1024; // 2 MB

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengecek apakah file ada
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];

        // Memeriksa ukuran file
        if ($fileSize > $maxFileSize) {
            die("File size exceeds maximum limit of 2 MB.");
        }

        // Mendapatkan ekstensi file
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        
        // Format penamaan file: yyyy-mm-dd hh.mm.ss.ekstensi
        $formattedDate = date('Y-m-d H.i.s');
        $newFileName = $formattedDate . '.' . $fileExtension;

        // Menentukan direktori tujuan
        $uploadFileDir = './uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        // Memindahkan file ke direktori tujuan
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo "File is successfully uploaded: " . $newFileName;
        } else {
            echo "There was an error moving the uploaded file.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
?>
