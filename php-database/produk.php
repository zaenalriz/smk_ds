<?php
include 'koneksi.php';

// koneksi
$dataUsers = mysqli_query($koneksi, "SELECT * FROM products");

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
        $i=1;
        foreach ($dataUsers as $key => $value) {
        ?>
            <tr>
                <td><?php echo $i++?></td>
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