from Film import Film

class StudioBioskop(Film):
    def __init__(self, id_bioskop: str, nama: str, tahun_operasional: int, judul: str, genre: str, durasi: int, nomor_studio: int, kapasitas: int, tipe_studio: str):
        super().__init__(id_bioskop, nama, tahun_operasional, judul, genre, durasi)
        self._nomor_studio = int(nomor_studio)
        self._kapasitas = int(kapasitas)
        self._tipe_studio = str(tipe_studio)

    # Getter & Setter
    def get_nomor_studio(self) -> int:
        return self._nomor_studio

    def set_nomor_studio(self, nomor: int):
        self._nomor_studio = int(nomor)

    def get_kapasitas(self) -> int:
        return self._kapasitas

    def set_kapasitas(self, kap: int):
        self._kapasitas = int(kap)

    def get_tipe_studio(self) -> str:
        return self._tipe_studio

    def set_tipe_studio(self, tipe: str):
        self._tipe_studio = str(tipe)