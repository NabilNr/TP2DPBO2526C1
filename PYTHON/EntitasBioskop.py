class EntitasBioskop:
    def __init__(self, id_bioskop: str, nama: str, tahun_operasional: int):
        self._id = str(id_bioskop)
        self._nama = str(nama)
        self._tahun_operasional = int(tahun_operasional)

    # Getter & Setter
    def get_id(self) -> str:
        return self._id

    def set_id(self, id_bioskop: str):
        self._id = str(id_bioskop)

    def get_nama(self) -> str:
        return self._nama

    def set_nama(self, nama: str):
        self._nama = str(nama)

    def get_tahun_operasional(self) -> int:
        return self._tahun_operasional

    def set_tahun_operasional(self, tahun: int):
        self._tahun_operasional = int(tahun)