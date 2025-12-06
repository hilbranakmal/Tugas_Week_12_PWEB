<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik
if(isset($_POST['daftar'])){

    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon']; // Data baru
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Ambil data file foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    // Rename nama fotonya dengan angka acak agar tidak duplikat
    $fotobaru = date('dmYHis').$foto;

    // Set path penyimpanan
    $path = "images/".$fotobaru;

    // Proses upload
    if(move_uploaded_file($tmp, $path)){
        
        // Jika upload berhasil, Lakukan Insert ke Database
        $sql = "INSERT INTO calon_siswa (nama, alamat, telepon, jenis_kelamin, agama, sekolah_asal, foto) 
                VALUE ('$nama', '$alamat', '$telepon', '$jk', '$agama', '$sekolah', '$fotobaru')";
        
        $query = mysqli_query($db, $sql);

        // Apakah query simpan berhasil?
        if( $query ) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }

    } else {
        // Jika upload gagal
        header('Location: index.php?status=gagal_upload');
    }

} else {
    die("Akses dilarang...");
}
?>