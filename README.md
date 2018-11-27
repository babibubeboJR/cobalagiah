# SIMPEL AREMA v 1.0 
berada pada branch master
new features :
- menambah fungsi pengkategorian pelanggan (Belum Survey, Belum Bayar, Belum RAB dan WO Tiang, Belum Pelaksanaan dan Belum Nyala)
- merubah halaman edit dengan membuat pembagian berdasarkan beberapa bagian (Rayon, Perencanaan dan Konstruksi)
- memberikan sifat ketergantungan antar field (dependensi)

notes field yang terindikasi dependensi:
- Bagian Perencanaan : bisa diisi jika sudah melakukan upload gambar dan bukti bayar
  1. field Tgl Kirim NODIN(PK) ke KON dari REN
  2. field Tgl Kirim NODIN(PK) ke Pengadaan dari REN
  3. field No. Nota Dinas
- Bagian Konstruksi :
  1. field Tgl Kirim Nota Dinas(PK) ke Vendor
  2. field Nama Vendor Pelaksana
  3. field Nomor SPK
- Bagian Rayon :
  1. field Tanggal Nyala
  2. field Tanggal PDL
