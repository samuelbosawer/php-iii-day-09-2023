<?php 
  require_once('conn.php');

if(isset($_POST['submit']))
{
    $nama_siswa = $_POST['nama_siswa'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];

    $query = " INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `usia`, `kelas`, `jk`) VALUES (NULL, '$nama_siswa', '$alamat ', '$usia', '$kelas', '$jk');";

    $tambah = mysqli_query($koneksi, $query);

    echo "
    <script>
        alert('Data Berhasil ditambah');
        window.location.href = 'index.php';
    </script>
    ";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama Siswa</label>
        <input id="nama" type="text" name="nama_siswa" placeholder="Masukan Nama" required>

        <br><br>
        <label for="usia">Usia</label>
        <input id="usia" type="number" name="usia" placeholder="Masukan usia" required>

        <br><br>
        <label for="alamat">Alamat</label>
        <input id="alamat" type="text" name="alamat" placeholder="Masukan alamat" required>


        <br><br>
        <label for="jk">Jenis Kelamin</label>
        <input id="jk" type="text" name="jk" placeholder="Masukan Jenis Kelamin" required>

        <br><br>
        <label for="kelas">Kelas</label>
        <input id="kelas" type="text" name="kelas" placeholder="Masukan Kelas" required>


        <br><br><br>
        <button type="submit" name="submit" >Simpan</button>
    </form>
</body>
</html>