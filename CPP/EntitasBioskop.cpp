#include <iostream>
#include <string>

using namespace std;

class EntitasBioskop {
protected:
    string id;
    string nama;
    int tahunOperasional;

public:
    EntitasBioskop() {}
    EntitasBioskop(string id, string nama, int tahunOperasional) {
        this->id = id;
        this->nama = nama;
        this->tahunOperasional = tahunOperasional;
    }

    // Getter & Setter
    string getId() const { return id; }
    void setId(string id) { this->id = id; }

    string getNama() const { return nama; }
    void setNama(string nama) { this->nama = nama; }

    int getTahunOperasional() const { return tahunOperasional; }
    void setTahunOperasional(int tahunOperasional) { this->tahunOperasional = tahunOperasional; }

    virtual ~EntitasBioskop() {}
};