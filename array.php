<?php

$nama = 'adit';
echo $nama;
echo "<br>";
$array = array('adit', 'radit', 'ilham');
$siswa = array('eko', 'reza', 'rezaldy', 'hilal', 'raka');
echo "--------------foreach---------------------";
echo "<br>";

function pecahArray($array)
{
    foreach ($array as $key => $value) {
        echo $value . $key . "<br>";
    }
}
pecahArray($array);
pecahArray($siswa);


echo "--------------array assosiatif----------------";
echo "<br>";
$array = array('adit', 'radit', 'ilham');
$array_assosiatif = array(
    'nama' => 'adit',
    'kelas' => 'RPL',
    'umur' => 20,
    'alamat' => 'cibinong'
);
pecahArray($array_assosiatif);

echo "--------------multi array----------------";
echo "<br>";

$multiArray = array(
    array('nama' => 'eko', 'kelas' => 'RPL'),
    array('nama' => 'ferdi', 'kelas' => 'ANIMASI'),
);


foreach ($multiArray as $key => $value) {
    echo $value['nama'] . "<br>";
    echo $value['kelas'] . "<br>";
}
echo "-------------data siswa----------------";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
        foreach ($multiArray as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value['nama'] ?></td>
                <td><?php echo $value['kelas'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>