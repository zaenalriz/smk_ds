<?php
include 'koneksi.php';

if(isset($_GET['pelajaran'])){
$pelajaran=$_GET['pelajaran'];
$dataUsers=mysqli_query($koneksi,"SELECT * FROM users where pelajaran='$pelajaran'");
}else{
    $dataUsers = mysqli_query($koneksi, "SELECT * FROM users order by id_user desc");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<nav>
    <ul>
        <li>
            <a href="show.php">Users</a>
            <a href="produk.php">Produk</a>
        </li>
    </ul>
</nav>

<form action="">
    <label for="">Pelajaran</label>
    <br>
<select name="pelajaran" id="">
<option value="">Pilih pelajaran</option>
<option value="Matematika">Matematikawan</option>
<option value="Fisika">Fisika</option>
<option value="Kimia">Kimia</option>
</select>
<button type="submit">filter</button>
<a href="show.php">tampilkan semua data</a>
</form>

<a href="tambah.php">Tambah data</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Pelajaran</th>
            <th>Nilai</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php
        $i=1;
        foreach ($dataUsers as $key => $value) {
        ?>
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $value['nama'] ?></td>
                <td><?php echo $value['pelajaran'] ?></td>
                <td><?php echo $value['nilai'] ?></td>
                <td><?php echo $value['tanggal'] ?></td>
                <td>
                    <a href="hapus.php?id_user=<?php echo $value['id_user']?>">Hapus data</a>
                    <a href="edit.php?id_user=<?php echo $value['id_user']?>">Edit data</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>