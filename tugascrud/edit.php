<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
</head>
<body>
  EDIT DATA
  <?php
    include 'koneksi.php';

    $pelanggan = mysqli_query($conn,"SELECT * from pelanggan where id='$_GET[id]'");

    while($p = mysqli_fetch_array($pelanggan)){
        $id = $p["id"];
        $nama = $p["nama"];
        $jenis_kelamin = $p["jenis_kelamin"];
        $telpon = $p["telpon"];
        $alamat = $p["alamat"];
       
    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <table><tr>
            <td>ID Pelanggan</td>
            <td>:</td>
            <td><input type="text" name="id" disabled value="<?php echo $id ?>"></td>
        </tr>
    
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
        </tr>
    
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin ?>"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telpon" value="<?php echo $telpon ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Simpan">
  </form>
</body>
</html>