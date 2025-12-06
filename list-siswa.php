<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS Tambahan Khusus untuk Tabel Foto */
        table img {
            width: 80px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        table th, table td {
            vertical-align: middle; /* Agar teks di tengah vertikal */
        }
    </style>
</head>
<body>
    <div class="container" style="max-width: 900px;">
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>

        <div style="text-align: right; margin-bottom: 10px;">
            <a href="form-daftar.php" class="btn">[+] Tambah Baru</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th> <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th> <th>Alamat</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $no = 1; // Untuk nomor urut

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    
                    // Menampilkan Foto
                    echo "<td><img src='images/".$siswa['foto']."'></td>";
                    
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['telepon']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        <br>
        <a href="index.php" style="text-decoration: none; color: #4facfe;">Kembali ke Menu Utama</a>
    </div>
</body>
</html>