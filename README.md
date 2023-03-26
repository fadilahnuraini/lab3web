# langkah langkah Membuat PHP dan Database MySQL


## Menjalankan MySQL Server
Untuk menjalankan MySQL Server dari menu XAMPP Contol.

<img width="499" alt="image" src="https://user-images.githubusercontent.com/119774568/227750006-216f9183-5978-42de-af0c-498a9f2e5d44.png">

## Mengakses MySQL Client menggunakan PHP MyAdmin
Pastikan webserver Apache dan MySQL server sudah dijalankan. Kemudian buka melalui browser:
http://localhost/phpmyadmin/
<img width="355" alt="image" src="https://user-images.githubusercontent.com/119774568/227751834-fa8bc125-b2b0-4535-ac59-0950fdd4a118.png">

## Membuat Database: Studi Kasus Data Barang
<img width="836" alt="image" src="https://user-images.githubusercontent.com/119774568/227750288-9c1c16c0-e64d-4c60-b8ed-c07c402107ff.png">

<img width="828" alt="image" src="https://user-images.githubusercontent.com/119774568/227750220-d91969c3-274f-4b94-a909-013f014e44b6.png">

## Membuat Program CRUD
Buat folder lab8_php_database pada root directory web server (d:\xampp\htdocs)
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab3_php_database/
<img width="355" alt="image" src="https://user-images.githubusercontent.com/119774568/227751780-84cfefe7-ebe6-43b0-ab90-3d2cd4301e81.png">


## 1.Membuat file koneksi database
Buat file baru dengan nama koneksi.php
Buka melalui browser untuk menguji koneksi database (untuk menyampilkan pesan koneksi berhasil,
uncomment pada perintah echo “koneksi berhasil”;
<img width="960" alt="image" src="https://user-images.githubusercontent.com/119774568/227751893-fb81f11b-4803-43cf-9699-3cf1166fa56f.png">


## 2.Membuat file index untuk menampilkan data (Read)
Buat file baru dengan nama index.php
<img width="959" alt="image" src="https://user-images.githubusercontent.com/119774568/227751570-03fd9ca5-1846-4396-9255-d66b3a01be34.png">
<img width="960" alt="image" src="https://user-images.githubusercontent.com/119774568/227751680-31d9e114-0a4b-4f7e-bcef-692a5f95b10c.png">



## 3.Menambah Data (Create)
Buat file baru dengan nama tambah.php
<img width="960" alt="image" src="https://user-images.githubusercontent.com/119774568/227751760-33d0bcfa-58b0-4660-b42e-20b2f8cc8474.png">


## Menghapus Data (Delete)
Buat file baru dengan nama hapus.php
fungsi nya menghapus data yang sudah di edit selaon di localhost mysql
<img width="956" alt="image" src="https://user-images.githubusercontent.com/119774568/227751980-91b85456-ebdb-4e4e-92fd-26063281e0eb.png">


