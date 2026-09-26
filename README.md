# JANJI
Saya Khalifa Nabil Nur dengan NIM 2511372 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi

Ketentuan:
- Memiliki 5 data awal default.
- Menerima input user(add)
- Desain diagram beserta alasannya
- Atribut foto khusus bahasa PHP

Terdapat 3 class:
1. EntitasBioskop : Sebagai kelas induk utama yang menyimpan atribut umum dari lokasi atau bisnis bioskop itu sendiri.
2. Film : Sebagai kelas perantara yang mewarisi sifat dari EntitasBioskop sekaligus menambahkan spesifikasi khusus mengenai film yang diputar di bioskop tersebut.
3. StudioBioskop : Sebagai kelas anak akhir yang merepresentasikan ruangan studio tempat film diputar secara nyata. Kelas ini memuat informasi paling mendetail.

## Diagram Konsep:
<img width="197" height="725" alt="Screenshot 2026-09-22 125021" src="https://github.com/user-attachments/assets/fc526b33-878d-4cdb-b30f-445b2c4ab286" />

## Alasan pemilihan class:
1. EntitasBioskop : Di dunia nyata, entitas bioskop (seperti XXI atau CGV) memiliki identitas umum yang ga bergantung sama film yang lagi tayang atau studio mana yang dipake.
2. Film : Film diturunkan dari EntitasBioskop karena tayangan film terjadi di bawah suatu entitas bioskop tertentu.
3. StudioBioskop : Kelas ini berada di tingkat paling bawah karena mencerminkan kejadian nyata di mana suatu film tertentu diputar di studio tertentu pada bioskop tertentu.


## Class & Atribut

1. EntitasBioskop <br>
id : string <br>
nama : string <br>
TahunOperasional : int

2. Film (Inheritance EntitasBioskop) <br>
Judul : string <br>
Genre : string <br>
Durasi : int

3. StudioBioskop (Inheritance Film) <br>
NomorStudio : int <br>
Kapasitas : int <br>
TipeStudio : string <br>
FotoProduk : string

## Alur Program

1. Program memuat 5 data default/awal.
2. Setelah melakukan run di cmd, data langsung ditampilkan pada sebuah tabel.
3. Semua data dapat ditampilkan di tabel dinamis.
4. setelah menampilkan user langsung bisa menambahkan data baru
5. setelah menginput, data langsung menampilkan hasil keseluruhan secara otomatis.
6. Pada PHP dapat mengupload gambar ke atribut foto.

## Dokumentasi Program
### C++
<img width="933" height="742" alt="CPP_tp2" src="https://github.com/user-attachments/assets/ec324234-362f-48e1-bd82-95bed3e7c835" />

### Java
<img width="1531" height="726" alt="image" src="https://github.com/user-attachments/assets/0ab69fdb-607e-4918-a1b4-25f111fbc5df" />

### PYTHON
<img width="967" height="685" alt="image" src="https://github.com/user-attachments/assets/5b679eaa-3045-495d-be54-52040e6920e0" />

### PHP
<img width="687" height="847" alt="Screenshot 2026-09-26 204855" src="https://github.com/user-attachments/assets/ed0254d1-c383-44d5-9b17-a3516ef1e568" />
<img width="1918" height="931" alt="Screenshot 2026-09-26 204918" src="https://github.com/user-attachments/assets/bcd3bb67-3230-46e9-8494-e80f0008737e" />
