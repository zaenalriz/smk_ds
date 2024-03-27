<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data</h2>
    <form action="tambah_data.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="pelajaran">Pelajaran:</label><br>
        <select name="pelajaran" id="">
            <option value="">Pilih pelajaran</option>
            <option value="Matematika">Matematika</option>
            <option value="Fisika">Fisika</option>
            <option value="Kimia">Kimia</option>
        </select><br>

        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" name="nilai"><br>

        <label for="nilai">Tanggal :</label><br>
        <input type="date" id="tanggal" name="tanggal">
        <br>
        <button type="submit">tambah data</button>
    </form>
</body>

</html>