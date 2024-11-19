<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="style/tambah.css">
</head>
<body>
  <div class="form-container">
    <h2>Tambah Data</h2>
    <form action="tambah_proses.php" method="post">
      <div class="input-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
      </div>
      <div class="input-group">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
      </div>
      <div class="input-group">
        <label for="nomor">Nomor</label>
        <input type="text" id="nomor" name="nomor" placeholder="Masukkan nomor telepon" required>
      </div>
      <div class="input-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>
      </div>
      <button type="submit" class="submit-btn">Tambah</button>
    </form>
  </div>
</body>
</html>
