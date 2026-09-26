#include "EntitasBioskop.cpp"

class Film : public EntitasBioskop {
protected:
    string judul;
    string genre;
    int durasi;

public:
    Film() : EntitasBioskop() {}
    Film(string id, string nama, int tahunOperasional, string judul, string genre, int durasi)
        : EntitasBioskop(id, nama, tahunOperasional) {
        this->judul = judul;
        this->genre = genre;
        this->durasi = durasi;
    }

    // Getter & Setter
    string getJudul() const { return judul; }
    void setJudul(string judul) { this->judul = judul; }

    string getGenre() const { return genre; }
    void setGenre(string genre) { this->genre = genre; }

    int getDurasi() const { return durasi; }
    void setDurasi(int durasi) { this->durasi = durasi; }
};