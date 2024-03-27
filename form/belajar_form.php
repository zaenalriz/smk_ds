<?php 
// http://localhost/smk_ds/form/belajar_form.php
if(isset($_GET['id'])){
    echo $_GET['id'];
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
    <form action="" method="get">
        <label for="">id</label>
        <input type="text" name="id">
        <select name="mapel">
            <option value="">pilih mapel</option>
            <option value="matematika">matematika</option>
            <option value="fisika">fisika</option>
        </select>
        <button>kirim</button>
    </form>
</body>

</html>