public class StudioBioskop extends Film {
    private int nomorStudio;
    private int kapasitas;
    private String tipeStudio;

    public StudioBioskop() {
        super();
    }

    public StudioBioskop(String id, String nama, int tahunOperasional, String judul, String genre, int durasi, int nomorStudio, int kapasitas, String tipeStudio) {
        super(id, nama, tahunOperasional, judul, genre, durasi);
        this.nomorStudio = nomorStudio;
        this.kapasitas = kapasitas;
        this.tipeStudio = tipeStudio;
    }

    // Getter & Setter
    public int getNomorStudio() { return nomorStudio; }
    public void setNomorStudio(int nomorStudio) { this.nomorStudio = nomorStudio; }

    public int getKapasitas() { return kapasitas; }
    public void setKapasitas(int kapasitas) { this.kapasitas = kapasitas; }

    public String getTipeStudio() { return tipeStudio; }
    public void setTipeStudio(String tipeStudio) { this.tipeStudio = tipeStudio; }
}