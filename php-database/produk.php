<?php
include 'koneksi.php';

// koneksi
if (isset($_GET['stok'])) {
    $stok=$_GET['stok'];
    $dataUsers = mysqli_query($koneksi, "SELECT * FROM products where stok > '$stok'");
}else{
    $dataUsers = mysqli_query($koneksi, "SELECT * FROM products");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<nav>
    <ul>
        <li>
            <a href="show.php">Users</a>
            <a href="produk.php">Produk</a>
        </li>
    </ul>
</nav>

<form action="">
    <!-- <label for="">tanggal</label>
    <select name="tanggal">
        <option value="">pilih tanggal</option>
        <option value="2022-03-02">2022-03-02</option>
        <option value="2022-03-03">2022-03-03</option>
        <option value="2022-03-06">2022-03-06</option>
        <option value="2022-03-07">2022-03-07</option>
        <option value="2022-03-08">2022-03-08</option>
        <option value="2022-03-09">2022-03-09</option>
    </select> -->
    <select name="stok" id="">
<option value="">pilih stok</option>
<option value="10">diatas 10</option>
<option value="30">diatas 30</option>
<option value="50">diatas 50 </option>
    </select>
    <button type="submit">filter</button>
</form>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Sotk</th>
            <th>Tanggal</th>
        </tr>
        <?php
        $i = 1;
        foreach ($dataUsers as $key => $value) {
        ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $value['nama'] ?></td>
                <td><?php echo $value['harga'] ?></td>
                <td><?php echo $value['stok'] ?></td>
                <td><?php echo $value['tanggal'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>