<?php
require_once __DIR__ . '/EntitasBioskop.php';

class Film extends EntitasBioskop {
    protected string $judul;
    protected string $genre;
    protected int $durasi;

    public function __construct(string $id, string $nama, int $tahunOperasional, string $judul, string $genre, int $durasi) {
        parent::__construct($id, $nama, $tahunOperasional);
        $this->judul = $judul;
        $this->genre = $genre;
        $this->durasi = $durasi;
    }

    public function getJudul(): string { return $this->judul; }
    public function setJudul(string $judul): void { $this->judul = $judul; }

    public function getGenre(): string { return $this->genre; }
    public function setGenre(string $genre): void { $this->genre = $genre; }

    public function getDurasi(): int { return $this->durasi; }
    public function setDurasi(int $durasi): void { $this->durasi = $durasi; }
}
?>