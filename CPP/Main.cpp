#include <iostream>
#include <vector>
#include <iomanip>
#include "StudioBioskop.cpp"

using namespace std;

void cetakGaris(int panjang) {
    for (int i = 0; i < panjang; i++) cout << "-";
    cout << endl;
}

void tampilkanTabelDinamis(const vector<StudioBioskop>& listData) {
    cetakGaris(110);
    cout << left 
         << setw(8)  << "ID"
         << setw(20) << "Nama Bioskop"
         << setw(8)  << "Tahun"
         << setw(22) << "Judul Film"
         << setw(12) << "Genre"
         << setw(10) << "Durasi"
         << setw(10) << "Studio#"
         << setw(12) << "Kapasitas"
         << setw(10) << "Tipe" << endl;
    cetakGaris(110);

    for (const auto& s : listData) {
        cout << left 
             << setw(8)  << s.getId()
             << setw(20) << s.getNama()
             << setw(8)  << s.getTahunOperasional()
             << setw(22) << s.getJudul()
             << setw(12) << s.getGenre()
             << setw(10) << (to_string(s.getDurasi()) + "m")
             << setw(10) << s.getNomorStudio()
             << setw(12) << (to_string(s.getKapasitas()) + " seat")
             << setw(10) << s.getTipeStudio() << endl;
    }
    cetakGaris(110);
}

int main() {
    vector<StudioBioskop> listData;

    // 5 Objek Awal
    listData.push_back(StudioBioskop("BSK01", "XXI Cihampelas", 2016, "Moana", "Animation", 107, 1, 150, "IMAX"));
    listData.push_back(StudioBioskop("BSK02", "CGV Paris Van Java", 2012, "The Amazing Spiderman", "Action", 136, 3, 120, "4DX"));
    listData.push_back(StudioBioskop("BSK03", "Cinepolis Istana", 2012, "Life Of Pi", "Adventure", 127, 2, 200, "Regular"));
    listData.push_back(StudioBioskop("BSK04", "XXI Paris Van Java", 2012, "Avengers: Endgame", "Action", 181, 5, 180, "IMAX"));
    listData.push_back(StudioBioskop("BSK05", "CGV Grand Indonesia", 2018, "Bohemian Rhapsody", "Music", 134, 4, 100, "Velvet"));

    cout << "\n=== DATA AWAL STUDIO BIOSKOP (5 OBJEK) ===" << endl;
    tampilkanTabelDinamis(listData);

    cout << "\n--- TAMBAH DATA BARU DARI INPUT USER ---" << endl;
    int n;
    cout << "Berapa banyak data yang ingin ditambahkan? ";
    if (cin >> n && n > 0) {
        cin.ignore();
        for (int i = 0; i < n; i++) {
            string id, nama, judul, genre, tipe;
            int tahun, durasi, nomor, kapasitas;

            cout << "\n[ Data ke-" << (i + 1) << " ]" << endl;
            cout << "ID Bioskop        : "; getline(cin, id);
            cout << "Nama Bioskop      : "; getline(cin, nama);
            cout << "Tahun Operasional : "; cin >> tahun; cin.ignore();
            cout << "Judul Film        : "; getline(cin, judul);
            cout << "Genre Film        : "; getline(cin, genre);
            cout << "Durasi Film (m)   : "; cin >> durasi; cin.ignore();
            cout << "Nomor Studio      : "; cin >> nomor; cin.ignore();
            cout << "Kapasitas Studio  : "; cin >> kapasitas; cin.ignore();
            cout << "Tipe Studio       : "; getline(cin, tipe);

            listData.push_back(StudioBioskop(id, nama, tahun, judul, genre, durasi, nomor, kapasitas, tipe));
        }
    }

    cout << "\n=== DATA SELURUH STUDIO BIOSKOP SETELAH PENAMBAHAN ===" << endl;
    tampilkanTabelDinamis(listData);

    return 0;
}