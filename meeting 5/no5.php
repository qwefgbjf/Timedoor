<?php
$produk = [
    "elektronik" => ["TV", "Laptop", "Smartphone"],
    "pakaian" => ["Kaos", "Jaket", "Celana"],
    "makanan" => ["Nasi Goreng", "Burger", "Pizza"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['kategori'];

    if (array_key_exists(key: $kategori, array: $produk)) {
        echo "Daftar Produk $kategori:<br>";
        echo "<ul>";
        foreach ($produk[$kategori] as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    } else {
        echo "Kategori tidak ditemukan!";
    }
}
?>
<form method="POST">
    Pilih Kategori:
    <select name="kategori">
        <option value="elektronik">Elektronik</option>
        <option value="pakaian">Pakaian</option>
        <option value="makanan">Makanan</option>
    </select><br>
    <button type="submit">Tampilkan Produk</button>
</form>
