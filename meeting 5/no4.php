<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim(string: $_POST['nama']);
    $email = trim(string: $_POST['email']);
    $telepon = trim(string: $_POST['telepon']);
    $errors = [];

    if (empty($nama)) {
        $errors[] = "Nama wajib diisi.";
    }
    if (!filter_var(value: $email, filter: FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    if (!preg_match(pattern: "/^[0-9]+$/", subject: $telepon)) {
        $errors[] = "Nomor telepon harus berisi angka saja.";
    }

    if (empty($errors)) {
        echo "Pendaftaran berhasil!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>" . htmlspecialchars(string: $error) . "</p>";
        }
    }
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    Nomor Telepon: <input type="text" name="telepon" required><br>
    <button type="submit">Daftar</button>
</form>
