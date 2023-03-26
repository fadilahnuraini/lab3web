<?php
error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];
$file_gambar = $_FILES['file_gambar'];
$gambar = null;
if ($file_gambar['error'] == 0)
{
$filename = str_replace(' ', '_',$file_gambar['name']);
$destination = dirname(__FILE__) .'/gambar/' . $filename;
if(move_uploaded_file($file_gambar['tmp_name'], $destination))
{
$gambar = 'gambar/' . $filename;;
}
}
$sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli,
stok, gambar) ';
$sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}',
'{$harga_beli}', '{$stok}', '{$gambar}')";
$result = mysqli_query($conn, $sql);
header('location: indext.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>

h1 {
  font-size: 35px;
  text-align: center;
}
.input label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.input input[type="text"],
.input select,
.input input[type="file"] {
  width: 50%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

.submit input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit input[type="submit"]:hover {
  background-color: #45a049;
}

/* Style untuk preview gambar */
.preview {
  margin-top: 10px;
  width: 200px;
  height: 200px;
  border: 1px solid #ccc;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.preview img {
  width: 100%;
  height: auto;
}



    </style>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Tambah Barang</title>
</head>
<body>
<div class="container">
<h1>Tambah Barang</h1>
<div class="main">

<form method="post" action="tambah.php" enctype="multipart/form-
data">

<div class="input">
<label>Nama Barang</label>
<input type="text" name="nama" />
</div>
<div class="input">
<label>Kategori</label>
<select name="kategori">
<option value="Komputer">Komputer</option>
<option value="Elektronik">Elektronik</option>
<option value="Hand Phone">Hand Phone</option>
</select>
</div>
<div class="input">
<label>Harga Jual</label>
<input type="text" name="harga_jual" />
</div>
<div class="input">
<label>Harga Beli</label>
<input type="text" name="harga_beli" />
</div>
<div class="input">
<label>Stok</label>
<input type="text" name="stok" />
</div>
<div class="input">
<label>File Gambar</label>
<input type="file" name="file_gambar" />
</div>
<div class="submit">
<input type="submit" name="submit" value="Simpan" />
</div>
</form>
</div>
</div>


<script>
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function(){
    var preview = document.getElementById('preview');
    var img = new Image();
    img.src = reader.result;
    img.onload = function() {
      var width = img.width;
      var height = img.height;
      if (width > height) {
        preview.style.width = "200px";
        preview.style.height = "auto";
      } else {
        preview.style.width = "auto";
        preview.style.height = "200px";
      }
    }
    preview.innerHTML = '';
    preview.appendChild(img);
  }
  reader.readAsDataURL(event.target.files[0]);
}
</script>


<div class="input">
  <label>File Gambar</label>
  <input type="file" name="file_gambar" onchange="previewImage(event)" />
</div>
<div class="preview" id="preview"></div>






</body>
</html>