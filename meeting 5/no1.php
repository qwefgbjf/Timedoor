<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars(string: $_POST['nama']);
    $email = htmlspecialchars(string: $_POST['email']);
    $password = htmlspecialchars(string: $_POST['password']);

    if (!empty($nama) && !empty($email) && !empty($password)) {
        echo "Selamat datang, $nama!";
    } else {
        echo "Harap isi semua kolom!";
    }
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Daftar</button>
</form>
