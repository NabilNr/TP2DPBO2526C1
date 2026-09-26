from StudioBioskop import StudioBioskop

def cetak_garis(panjang=110):
    print("-" * panjang)

def tampilkan_tabel(list_data):
    cetak_garis()
    print(f"{'ID':<8} {'Nama Bioskop':<20} {'Tahun':<8} {'Judul Film':<22} {'Genre':<12} {'Durasi':<10} {'Studio#':<10} {'Kapasitas':<12} {'Tipe':<10}")
    cetak_garis()
    for s in list_data:
        print(f"{s.get_id():<8} {s.get_nama():<20} {s.get_tahun_operasional():<8} {s.get_judul():<22} {s.get_genre():<12} {str(s.get_durasi()) + 'm':<10} {s.get_nomor_studio():<10} {str(s.get_kapasitas()) + ' seat':<12} {s.get_tipe_studio():<10}")
    cetak_garis()

def main():
    list_data = [
        StudioBioskop("BSK01", "XXI Cihampelas", 2016, "Moana", "Animation", 107, 1, 150, "IMAX"),
        StudioBioskop("BSK02", "CGV Paris Van Java", 2012, "The Amazing Spiderman", "Action", 136, 3, 120, "4DX"),
        StudioBioskop("BSK03", "Cinepolis Istana", 2012, "Life Of Pi", "Adventure", 127, 2, 200, "Regular"),
        StudioBioskop("BSK04", "XXI Paris Van Java", 2012, "Avengers: Endgame", "Action", 181, 5, 180, "IMAX"),
        StudioBioskop("BSK05", "CGV Grand Indonesia", 2018, "Bohemian Rhapsody", "Music", 134, 4, 100, "Velvet")
    ]

    print("\n=== DATA AWAL STUDIO BIOSKOP (5 OBJEK) ===")
    tampilkan_tabel(list_data)

    try:
        n = int(input("\nBerapa banyak data yang ingin ditambahkan? "))
        for i in range(n):
            print(f"\n[ Data ke-{i+1} ]")
            id_b = input("ID Bioskop        : ")
            nama = input("Nama Bioskop      : ")
            tahun = int(input("Tahun Operasional : "))
            judul = input("Judul Film        : ")
            genre = input("Genre Film        : ")
            durasi = int(input("Durasi Film (m)   : "))
            nomor = int(input("Nomor Studio      : "))
            kapasitas = int(input("Kapasitas Studio  : "))
            tipe = input("Tipe Studio       : ")

            list_data.append(StudioBioskop(id_b, nama, tahun, judul, genre, durasi, nomor, kapasitas, tipe))
    except ValueError:
        pass

    print("\n=== DATA SELURUH STUDIO BIOSKOP SETELAH PENAMBAHAN ===")
    tampilkan_tabel(list_data)

if __name__ == "__main__":
    main()