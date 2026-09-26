<?php
require_once __DIR__ . '/Film.php';

class StudioBioskop extends Film {
    private int $nomorStudio;
    private int $kapasitas;
    private string $tipeStudio;
    private string $fotoProduk;

    public function __construct(string $id, string $nama, int $tahunOperasional, string $judul, string $genre, int $durasi, int $nomorStudio, int $kapasitas, string $tipeStudio, string $fotoProduk = "uploads/studio_default.png") {
        parent::__construct($id, $nama, $tahunOperasional, $judul, $genre, $durasi);
        $this->nomorStudio = $nomorStudio;
        $this->kapasitas = $kapasitas;
        $this->tipeStudio = $tipeStudio;
        $this->fotoProduk = $fotoProduk;
    }

    public function getNomorStudio(): int { return $this->nomorStudio; }
    public function setNomorStudio(int $nomor): void { $this->nomorStudio = $nomor; }

    public function getKapasitas(): int { return $this->kapasitas; }
    public function setKapasitas(int $kap): void { $this->kapasitas = $kap; }

    public function getTipeStudio(): string { return $this->tipeStudio; }
    public function setTipeStudio(string $tipe): void { $this->tipeStudio = $tipe; }

    public function getFotoProduk(): string { return $this->fotoProduk; }
    public function setFotoProduk(string $foto): void { $this->fotoProduk = $foto; }
}
?>