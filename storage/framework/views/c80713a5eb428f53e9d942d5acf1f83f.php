<?php
    $koneksi        = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");
    
    $isi_laporan = $_POST['isi_laporan'];
    $tanggal = date('Y-m-d');
    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($asal_foto, "image/$nama_foto");

    $koneksi->query("INSERT INTO `pengaduan` VALUES ('','$tanggal','02','$isi','$nama_foto','0')");
    header("location:home.php");
?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/pengaduan_simpan.blade.php ENDPATH**/ ?>