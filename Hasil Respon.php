<?php
    // echo untuk menampilkan hasil output pada layar, sama seperti syntax print
    $Namanya = $_POST["nama"];
    echo "Nama          : " .$Namanya . "<br>";
    $Kelasnya = $_POST["matkul"];
    echo "Kelas         : " .$Kelasnya . "<br>";

    // kita beri lokasi untuk penyimpanan gambarnya
    $folder="Gambar/"; //untuk variabel penyimpanan nama folder
    $Uploadan = $folder . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $Uploadan);
    echo "Foto Biodata  : <br>";
    echo "<img src='$Uploadan' width='100'>";
?>
