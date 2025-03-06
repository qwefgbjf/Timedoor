<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = 0;

    if ($operator == "tambah") {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == "kurang") {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == "kali") {
        $hasil = $angka1 * $angka2;
    } elseif ($operator == "bagi") {
        if ($angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } else {
            $hasil = "Tidak bisa dibagi nol!";
        }
    }

    echo "Hasil: $hasil";
}
?>
<form method="POST">
    Angka 1: <input type="number" name="angka1" required><br>
    Angka 2: <input type="number" name="angka2" required><br>
    Operasi:
    <select name="operator">
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select><br>
    <button type="submit">Hitung</button>
</form>
