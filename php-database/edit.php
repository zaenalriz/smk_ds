<?php 
include 'koneksi.php';
$id_user=$_GET['id_user'];

$query=mysqli_query($koneksi,"SELECT * FROM users where id_user='$id_user'");

// $multiArray = array(
//     array('id_user' => '17', 'nama' => 'radit','pelajaran'=>'Matematika','nilai'=>20,'tanggal'=>'2022-03-22'),
// );
// foreach ($query as $key => $value) {
//     echo $value['nama'];
//     echo $value['pelajaran'];
// }


// menjadikan multiarray menjadi array
// $multiArray=array('id_user' => '17', 'nama' => 'radit','pelajaran'=>'Matematika','nilai'=>20,'tanggal'=>'2022-03-22');
$row=mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
    <h2>Form Edit Data</h2>
    <form action="update_data.php" method="post">
        <input type="text" name="id" value="<?php echo $row['id_user'] ?>">
       
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" value="<?php echo $row['nama']?>" name="nama"><br>
        <label for="pel ran">Pelajaran:</label><br>
        <select name="pelajaran" id="">
            <option value="">Pilih pelajaran</option>
            <option <?php if($row['pelajaran']=="Matematika"){
                echo "selected";
            } ?>
             value="Matematika">Matematika</option>
         
             <option  value="Fisika">Fisika</option>
            <option value="Kimia">Kimia</option>
        </select><br>

        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" value="<?php echo $row['nilai']?>" name="nilai"><br>

        <label for="nilai">Tanggal :</label><br>
        <input type="datetime" id="tanggal" value="<?php echo $row['tanggal']?>" name="tanggal">
        <br>
        <button type="submit">edit data</button>
    </form>
</body>

</html>