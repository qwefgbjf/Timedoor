<?php
$nilai_tukar = [
    "IDR" => 1,
    "USD" => 15000,
    "EUR" => 16500,
    "JPY" => 130
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = $_POST['jumlah'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    if (isset($nilai_tukar[$dari]) && isset($nilai_tukar[$ke])) {
        $jumlah_dalam_idr = $jumlah * $nilai_tukar[$dari];  
        $hasil = $jumlah_dalam_idr / $nilai_tukar[$ke];

        echo "Hasil Konversi: $jumlah $dari = " . number_format(num: $hasil, decimals: 2) . " $ke";
    } else {
        echo "Mata uang tidak valid!";
    }
}
?>
<form method="POST">
    Jumlah: <input type="number" name="jumlah" required><br>
    Dari:
    <select name="dari">
        <option value="IDR">IDR</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="JPY">JPY</option>
    </select><br>
    Ke:
    <select name="ke">
        <option value="IDR">IDR</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="JPY">JPY</option>
    </select><br>
    <button type="submit">Konversi</button>
</form>
