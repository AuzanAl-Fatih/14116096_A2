<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TUGAS Pertemuan 3 Bagian 2</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>

  <body>

  <div class = "kartu">
    <h1>Tambah Data</h1>
    <div class="formulir">
      <form action="tambah.php" method="post">
      <input type="text" placeholder="Masukkan nrp"  name="nrp" size="35" maxlength="50"> 
      <input type="text" placeholder="Masukkan nama" name="nama" size="35" maxlength="50"> 
      <input type="text" placeholder="Masukkan alamat" name="alamat" size="35" maxlength="50">
      Jurusan : <select name="id_jur">
      <option value="1">Teknik Informatika</option>
      <option value="2">Teknik Elektro</option>
      </select><br><br>
      <input type="submit" value="Simpan">
      <input type="reset" value="Reset">
    </form>
    </div>
    
    <div class="cari">
      <form action="cari.php" method="post">
      <input type="submit" name="" value="Cari">
      </form>
    </div>

    <div class="hapus">
      <form action="hapus.php" method="post">
      <input action ="hapus.php" type="submit" name="" value="Hapus">
      </form>
    </div>
    
    </div>

  </body>
</html>