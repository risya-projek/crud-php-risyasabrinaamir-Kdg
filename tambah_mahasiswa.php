<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "UTF-8">
    <tittle> Tambah Data Mahasiswa</tittle>
</head>

<body>
    <h2> Tambah Data Mahasiswa </h2>
    <form action = "proses_tambah.php" method = "POST">
        <label>Nama:</label>
        <input type = "text" name="name" required><br>

        <label> NIM:</label>
        <input type="text" name="nim" required><br>

        <label> Email:</label>
        <input type="text" name="Email" required><br>

        <label> NOMOR:</label>
        <input type="text" name="NOMOR" required><br>

        <label> Jurusan:</label>
        <input type="text" name="JURUSAN" required><br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>
