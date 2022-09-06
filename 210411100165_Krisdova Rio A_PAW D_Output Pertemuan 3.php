<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Membuat form dengan beberapa masukkan : -->
    <!-- Nama, Alamat, dan Foto Biodata(berupa file) -->
    <form action="Hasil Respon.php" method="post" enctype="multipart/form-data">
        <h3>Nama Lengkap : </h3>
        <input type="text" name="nama" maxlength="30">
        <br>
        <h3>Kelas Matkul : </h3>
        <input type="text" name="matkul" maxlength="25">
        <br>
        <h3>Foto Biodata :</h3>
        <input type="file" name="file" id="file">
        <p></p>
        <input type="submit" name="submit" value="Kirim"> 
    </form>
</body>
</html>