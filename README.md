# SQL_Injection
SQL Injection adalah teknik eksploitasi yang menyerang lapisan komunikasi antara aplikasi web dan database dengan cara 
menyisipkan perintah SQL ilegal melalui input pengguna, seperti form login atau parameter URL. Serangan ini memanfaatkan 
kelemahan dalam validasi input, di mana aplikasi secara tidak sengaja menggabungkan input pengguna ke dalam query SQL 
tanpa proses penyaringan atau sanitasi yang memadai. Ketika kode berbahaya ini diproses oleh backend, database akan 
mengeksekusinya seolah-olah itu adalah instruksi yang sah, membuka celah besar dalam sistem keamanan aplikasi.

- login hanya akan berhasil jika mengisikan username dan password yang sesuai dengan data pada kolom berikut 
  
![Screenshot 2025-05-08 074416](https://github.com/user-attachments/assets/82162f47-3178-4fdf-a040-213baaf9b09b)

- melakukan SQL injection pada website rentan yang sudah dibuat
- Memasukan ‘ OR ‘1’ = ‘1’ -- pada kolom username, dan mengabaikan password (isi apa saja)

![Screenshot 2025-05-08 084000](https://github.com/user-attachments/assets/714cb50d-e108-43d0-867c-e5a4ff49d252)

- Berhasil Login ke Sistem

![Screenshot 2025-05-08 084011](https://github.com/user-attachments/assets/9b3f2f10-094b-4a55-bcb3-277608e5b597)

- Hal tersebut bisa terjadi karena kondisi ‘ OR ‘1’ = ‘1’ selalu True maka query akan mengembalikan semua baris
  dalam tabel, Sistem akan menganggap pengguna berhasil login, meskipun kredensial yang diberikan salah atau kosong.

# Menggunakan Prepared Statement
Prepared statement adalah metode untuk mencegah SQL Injection dengan memisahkan perintah SQL dari input pengguna.
Input dimasukkan sebagai parameter, bukan bagian langsung dari query, sehingga mencegah eksekusi kode berbahaya.

![Screenshot 2025-05-08 085532](https://github.com/user-attachments/assets/4fc48888-a292-42c5-9405-8951f0c70784)

- Gagal Masuk ke Sistem
  
![Screenshot 2025-05-08 085542](https://github.com/user-attachments/assets/fbf3c968-b17f-4f9e-88bc-2a7d1d953346)

dengan upaya ini web memisahkan data input pengguna dari perintah SQL, mencegah input pengguna diinterpretasikan 
sebagai bagian dari perintah SQL.

