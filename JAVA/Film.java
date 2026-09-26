public class Film extends EntitasBioskop {
    protected String judul;
    protected String genre;
    protected int durasi;

    public Film() {
        super();
    }

    public Film(String id, String nama, int tahunOperasional, String judul, String genre, int durasi) {
        super(id, nama, tahunOperasional);
        this.judul = judul;
        this.genre = genre;
        this.durasi = durasi;
    }

    // Getter & Setter
    public String getJudul() { return judul; }
    public void setJudul(String judul) { this.judul = judul; }

    public String getGenre() { return genre; }
    public void setGenre(String genre) { this.genre = genre; }

    public int getDurasi() { return durasi; }
    public void setDurasi(int durasi) { this.durasi = durasi; }
}