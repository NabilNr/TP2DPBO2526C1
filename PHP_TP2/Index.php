<?php
session_start();
require_once __DIR__ . "/StudioBioskop.php";

// 5 Objek Awal dengan Path Poster Lokal
if (!isset($_SESSION['list_studio'])) {
    $_SESSION['list_studio'] = [
        serialize(new StudioBioskop("BSK01", "XXI Cihampelas", 2016, "Moana", "Animation", 107, 1, 150, "IMAX", "gambar/moana.jpg")),
        serialize(new StudioBioskop("BSK02", "CGV Paris Van Java", 2012, "The Amazing Spiderman", "Action", 136, 3, 120, "4DX", "gambar/spidermsn.jpg")),
        serialize(new StudioBioskop("BSK03", "Cinepolis Istana", 2012, "Life Of Pi", "Adventure", 127, 2, 200, "Regular", "gambar/lifeofpi.jpg")),
        serialize(new StudioBioskop("BSK04", "XXI Paris Van Java", 2012, "Avengers: Endgame", "Action", 181, 5, 180, "IMAX", "gambar/avengers.jpg")),
        serialize(new StudioBioskop("BSK05", "CGV Grand Indonesia", 2018, "Bohemian Rhapsody", "Music", 134, 4, 100, "Velvet", "gambar/rhapsody.jpg"))
    ];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $tahun = (int)($_POST['tahun'] ?? 0);
    $judul = $_POST['judul'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $durasi = (int)($_POST['durasi'] ?? 0);
    $nomor = (int)($_POST['nomor'] ?? 0);
    $kapasitas = (int)($_POST['kapasitas'] ?? 0);
    $tipe = $_POST['tipe'] ?? '';

    $foto_path = "gambar/studio_default.png";
    if (isset($_FILES['foto_produk']) && $_FILES['foto_produk']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "gambar/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
        $target_file = $target_dir . time() . '_' . basename($_FILES['foto_produk']['name']);
        if (move_uploaded_file($_FILES['foto_produk']['tmp_name'], $target_file)) {
            $foto_path = $target_file;
        }
    }

    $_SESSION['list_studio'][] = serialize(new StudioBioskop($id, $nama, $tahun, $judul, $genre, $durasi, $nomor, $kapasitas, $tipe, $foto_path));
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Multilevel Inheritance Studio Bioskop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .form-box { border: 1px solid #ccc; padding: 15px; width: 450px; margin-bottom: 20px; }
        img { max-width: 80px; height: auto; }
    </style>
</head>
<body>

    <h2>Sistem Manajemen Studio Bioskop (PHP Web)</h2>

    <div class="form-box">
        <h3>Tambah Data Studio Bioskop</h3>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <p><label>ID Bioskop:</label><br><input type="text" name="id" required></p>
            <p><label>Nama Bioskop:</label><br><input type="text" name="nama" required></p>
            <p><label>Tahun Operasional:</label><br><input type="number" name="tahun" required></p>
            <p><label>Judul Film:</label><br><input type="text" name="judul" required></p>
            <p><label>Genre Film:</label><br><input type="text" name="genre" required></p>
            <p><label>Durasi (menit):</label><br><input type="number" name="durasi" required></p>
            <p><label>Nomor Studio:</label><br><input type="number" name="nomor" required></p>
            <p><label>Kapasitas Kursi:</label><br><input type="number" name="kapasitas" required></p>
            <p><label>Tipe Studio:</label><br><input type="text" name="tipe" required></p>
            <p><label>Foto Produk (Poster):</label><br><input type="file" name="foto_produk" accept="image/*"></p>
            <button type="submit">Tambah Data</button>
        </form>
    </div>

    <h3>Tabel Data Seluruh Studio Bioskop</h3>
    <table>
        <thead>
            <tr>
                <th>Foto Produk</th>
                <th>ID</th>
                <th>Nama Bioskop</th>
                <th>Tahun Operasional</th>
                <th>Judul Film</th>
                <th>Genre</th>
                <th>Durasi</th>
                <th>Nomor Studio</th>
                <th>Kapasitas</th>
                <th>Tipe Studio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['list_studio'] as $item): ?>
                <?php $s = unserialize($item); ?>
                <tr>
                    <td><img src="<?= htmlspecialchars($s->getFotoProduk()) ?>" alt="Foto"></td>
                    <td><?= htmlspecialchars($s->getId()) ?></td>
                    <td><?= htmlspecialchars($s->getNama()) ?></td>
                    <td><?= htmlspecialchars($s->getTahunOperasional()) ?></td>
                    <td><?= htmlspecialchars($s->getJudul()) ?></td>
                    <td><?= htmlspecialchars($s->getGenre()) ?></td>
                    <td><?= htmlspecialchars($s->getDurasi()) ?> menit</td>
                    <td>Studio <?= htmlspecialchars($s->getNomorStudio()) ?></td>
                    <td><?= htmlspecialchars($s->getKapasitas()) ?> seat</td>
                    <td><?= htmlspecialchars($s->getTipeStudio()) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>