# Sistem Informasi Perpustakaan - Modul Anggota

## Identitas Mahasiswa

* Nama : Aldila Rachma Aulia
* NIM : 60324066
* Mata Kuliah : Pemrograman Web II
* Pertemuan : 13 
* Framework : Laravel 12

---

## Deskripsi Project

Project ini merupakan pengembangan Sistem Informasi Perpustakaan berbasis Laravel pada modul Anggota.

Pada pertemuan 13 dilakukan implementasi fitur CRUD Anggota, Auto Generate Kode Anggota, Export Data Anggota ke Excel, serta Advanced Search & Filter.

---

# Fitur yang Diimplementasikan

## 1. Auto Generate Kode Anggota

Kode anggota dibuat secara otomatis saat menambahkan anggota baru.

### Format Kode

AGT-TAHUN-NOMOR_URUT

### Contoh

AGT-2026-001

AGT-2026-002

AGT-2026-003

### Fitur

* Nomor anggota dibuat otomatis.
* Nomor urut bertambah secara otomatis.
* Tidak perlu input manual.
* Mengurangi kesalahan input data.

---

## 2. Export Data Anggota ke Excel

Fitur export menggunakan package:

Laravel Excel (maatwebsite/excel)

### Hasil Export

File akan terunduh dalam format:

anggota_YYYY-MM-DD_HHMMSS.xlsx

### Data yang Diexport

* Kode Anggota
* Nama
* Email
* Telepon
* Alamat
* Tanggal Lahir
* Jenis Kelamin
* Pekerjaan
* Status
* Tanggal Daftar

---

## 3. Advanced Search & Filter

Fitur pencarian dan filter data anggota.

### Search

Pencarian berdasarkan:

* Nama
* Email
* Telepon

### Filter

Filter berdasarkan:

* Jenis Kelamin
* Status
* Pekerjaan

### Kombinasi Filter

Pengguna dapat menggabungkan beberapa filter sekaligus untuk mendapatkan hasil pencarian yang lebih spesifik.

---

# Screenshot

## Daftar Anggota

<img width="1731" height="1131" alt="01-daftar-anggota" src="https://github.com/user-attachments/assets/a340e146-4c79-4410-ad30-470ce69113f0" />

## Auto Generate Kode Anggota

<img width="959" height="477" alt="02-auto-generate-kode" src="https://github.com/user-attachments/assets/a7344481-1b38-48fe-8a0c-024db4b0bdc7" />

## Edit Anggota

<img width="959" height="477" alt="04-edit-anggota" src="https://github.com/user-attachments/assets/0d44e2d8-2467-4c99-aac2-25d19aa2784f" />

## Detail Anggota

<img width="958" height="470" alt="03-detail-anggota" src="https://github.com/user-attachments/assets/8a1ddb07-c851-4972-86fa-a3f5db5c0af3" />

## Export Excel

<img width="782" height="242" alt="05-export-excel 2" src="https://github.com/user-attachments/assets/15d2e4dc-2b2f-4ac1-a120-5db0cd3ebe7b" />
<img width="959" height="185" alt="05-export-excel" src="https://github.com/user-attachments/assets/54d93956-2333-498c-bf4d-92cb534e5663" />

## Search & Filter

<img width="950" height="347" alt="06-search-filter" src="https://github.com/user-attachments/assets/fa4f18e6-7c12-4685-932d-3a018f1133e5" />

---

# Teknologi yang Digunakan

* PHP 8.2
* Laravel 12
* Bootstrap 5
* MySQL
* Laravel Excel (maatwebsite/excel)

---




