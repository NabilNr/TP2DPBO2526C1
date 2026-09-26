public class EntitasBioskop {
    protected String id;
    protected String nama;
    protected int tahunOperasional;

    public EntitasBioskop() {}

    public EntitasBioskop(String id, String nama, int tahunOperasional) {
        this.id = id;
        this.nama = nama;
        this.tahunOperasional = tahunOperasional;
    }

    // Getter & Setter
    public String getId() { return id; }
    public void setId(String id) { this.id = id; }

    public String getNama() { return nama; }
    public void setNama(String nama) { this.nama = nama; }

    public int getTahunOperasional() { return tahunOperasional; }
    public void setTahunOperasional(int tahunOperasional) { this.tahunOperasional = tahunOperasional; }
}