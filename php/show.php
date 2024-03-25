<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'latihan_pertemuan2';

$koneksi = mysqli_connect($host, $username, $password, $database);


// Query SQL untuk mengambil data
$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);
// Periksa apakah query berhasil dieksekusi
var_dump($result);
// Tutup koneksi
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desain Tabel HTML</title>
    <style>
        body{
            margin: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Data Tabel</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
foreach ($result as $key => $value) {
    var_dump($value);
            ?>
            <tr>
                <td><?=$key+1?></td>
                <td><?=$value['nama']?></td>
            </tr>
            <?php 
}
            ?>
        </tbody>
    </table>

</body>
</html>
