<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (!empty($nama) && !empty($email) && !empty($password)) {
        echo "Selamat datang, <b>$nama</b>!<br>";
        echo "Email Anda: <b>$email</b>";
    } else {
        echo "<p style='color:red;'>Harap isi semua kolom!</p>";
    }
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Daftar</button>
</form>
