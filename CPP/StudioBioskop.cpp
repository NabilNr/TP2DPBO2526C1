#include "Film.cpp"

class StudioBioskop : public Film {
private:
    int nomorStudio;
    int kapasitas;
    string tipeStudio;

public:
    StudioBioskop() : Film() {}
    StudioBioskop(string id, string nama, int tahunOperasional, string judul, string genre, int durasi, int nomorStudio, int kapasitas, string tipeStudio)
        : Film(id, nama, tahunOperasional, judul, genre, durasi) {
        this->nomorStudio = nomorStudio;
        this->kapasitas = kapasitas;
        this->tipeStudio = tipeStudio;
    }

    // Getter & Setter
    int getNomorStudio() const { return nomorStudio; }
    void setNomorStudio(int nomorStudio) { this->nomorStudio = nomorStudio; }

    int getKapasitas() const { return kapasitas; }
    void setKapasitas(int kapasitas) { this->kapasitas = kapasitas; }

    string getTipeStudio() const { return tipeStudio; }
    void setTipeStudio(string tipeStudio) { this->tipeStudio = tipeStudio; }
};