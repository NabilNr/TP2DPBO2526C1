<?php
class EntitasBioskop {
    protected string $id;
    protected string $nama;
    protected int $tahunOperasional;

    public function __construct(string $id, string $nama, int $tahunOperasional) {
        $this->id = $id;
        $this->nama = $nama;
        $this->tahunOperasional = $tahunOperasional;
    }

    public function getId(): string { return $this->id; }
    public function setId(string $id): void { $this->id = $id; }

    public function getNama(): string { return $this->nama; }
    public function setNama(string $nama): void { $this->nama = $nama; }

    public function getTahunOperasional(): int { return $this->tahunOperasional; }
    public function setTahunOperasional(int $tahun): void { $this->tahunOperasional = $tahun; }
}
?>