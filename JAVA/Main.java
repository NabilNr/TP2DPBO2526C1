import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    private static void cetakGaris(int panjang) {
        for (int i = 0; i < panjang; i++) System.out.print("-");
        System.out.println();
    }

    private static void tampilkanTabel(ArrayList<StudioBioskop> listData) {
        cetakGaris(110);
        System.out.printf("%-8s %-20s %-8s %-22s %-12s %-10s %-10s %-12s %-10s\n",
                "ID", "Nama Bioskop", "Tahun", "Judul Film", "Genre", "Durasi", "Studio#", "Kapasitas", "Tipe");
        cetakGaris(110);

        for (StudioBioskop s : listData) {
            System.out.printf("%-8s %-20s %-8d %-22s %-12s %-10s %-10d %-12s %-10s\n",
                    s.getId(), s.getNama(), s.getTahunOperasional(),
                    s.getJudul(), s.getGenre(), s.getDurasi() + "m",
                    s.getNomorStudio(), s.getKapasitas() + " seat", s.getTipeStudio());
        }
        cetakGaris(110);
    }

    public static void main(String[] args) {
        ArrayList<StudioBioskop> listData = new ArrayList<>();

        // 5 Objek Awal
        listData.add(new StudioBioskop("BSK01", "XXI Cihampelas",  2016, "Moana", "Animation", 107, 1, 150, "IMAX"));
        listData.add(new StudioBioskop("BSK02", "CGV Paris Van Java", 2012, "The Amazing Spiderman", "Action", 136, 3, 120, "4DX"));
        listData.add(new StudioBioskop("BSK03", "Cinepolis Istana", 2012, "Life Of Pi", "Adventure", 127, 2, 200, "Regular"));
        listData.add(new StudioBioskop("BSK04", "XXI Paris Van Java", 2012, "Avengers: Endgame", "Action", 181, 5, 180, "IMAX"));
        listData.add(new StudioBioskop("BSK05", "CGV Grand Indonesia", 2018, "Bohemian Rhapsody", "Music", 134, 4, 100, "Velvet"));

        

        System.out.println("\n=== DATA AWAL STUDIO BIOSKOP (5 OBJEK) ===");
        tampilkanTabel(listData);

        Scanner sc = new Scanner(System.in);
        System.out.print("\nBerapa banyak data yang ingin ditambahkan? ");
        if (sc.hasNextInt()) {
            int n = sc.nextInt();
            sc.nextLine();
            for (int i = 0; i < n; i++) {
                System.out.println("\n[ Data ke-" + (i + 1) + " ]");
                System.out.print("ID Bioskop        : "); String id = sc.nextLine();
                System.out.print("Nama Bioskop      : "); String nama = sc.nextLine();
                System.out.print("Tahun Operasional : "); int tahun = sc.nextInt(); sc.nextLine();
                System.out.print("Judul Film        : "); String judul = sc.nextLine();
                System.out.print("Genre Film        : "); String genre = sc.nextLine();
                System.out.print("Durasi Film (m)   : "); int durasi = sc.nextInt(); sc.nextLine();
                System.out.print("Nomor Studio      : "); int nomor = sc.nextInt(); sc.nextLine();
                System.out.print("Kapasitas Studio  : "); int kapasitas = sc.nextInt(); sc.nextLine();
                System.out.print("Tipe Studio       : "); String tipe = sc.nextLine();

                listData.add(new StudioBioskop(id, nama, tahun, judul, genre, durasi, nomor, kapasitas, tipe));
            }
        }

        System.out.println("\n=== DATA SELURUH STUDIO BIOSKOP SETELAH PENAMBAHAN ===");
        tampilkanTabel(listData);
        sc.close();
    }
}