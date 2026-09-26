from EntitasBioskop import EntitasBioskop

class Film(EntitasBioskop):
    def __init__(self, id_bioskop: str, nama: str, tahun_operasional: int, judul: str, genre: str, durasi: int):
        super().__init__(id_bioskop, nama, tahun_operasional)
        self._judul = str(judul)
        self._genre = str(genre)
        self._durasi = int(durasi)

    # Getter & Setter
    def get_judul(self) -> str:
        return self._judul

    def set_judul(self, judul: str):
        self._judul = str(judul)

    def get_genre(self) -> str:
        return self._genre

    def set_genre(self, genre: str):
        self._genre = str(genre)

    def get_durasi(self) -> int:
        return self._durasi

    def set_durasi(self, durasi: int):
        self._durasi = int(durasi)