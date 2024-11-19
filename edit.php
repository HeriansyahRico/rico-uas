<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id =$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <link rel="stylesheet" href="style/tambah.css">
</head>
<body>
  <div class="form-container">
    <h2>Edit Data</h2>
    <form action="edit_proses.php" method="post">
      <div class="input-group">
          <input type="hidden" id="id" name="id" value="<?php echo $data['id'];?>" >
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama'];?>" >
      </div>
      <div class="input-group">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim"  value="<?php echo $data['nim'];?>" >
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"  value="<?php echo $data['email'];?>">
      </div>
      <div class="input-group">
        <label for="nomor">Nomor</label>
        <input type="text" id="nomor" name="nomor"  value="<?php echo $data['nomor'];?>">
      </div>
      <div class="input-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan"  value="<?php echo $data['jurusan'];?>">
      </div>
      <button type="submit" class="submit-btn">Edit</button>
    </form>
  </div>
</body>
</html>
