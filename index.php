<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Coding</h1>
        </header>

        <?php if(isset($_GET['status'])): ?>
            <div class="status-message">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "<p style='color:green; font-weight:bold;'>Pendaftaran siswa baru berhasil!</p>";
                    } else {
                        echo "<p style='color:red; font-weight:bold;'>Pendaftaran gagal!</p>";
                    }
                ?>
            </div>
        <?php endif; ?>

        <nav class="nav-menu">
            <ul>
                <li><a href="form-daftar.php" class="btn">[+] Daftar Baru</a></li>
                <li><a href="list-siswa.php" class="btn">List Pendaftar</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>