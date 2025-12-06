<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="max-width: 600px;">
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama lengkap" required />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" required></textarea>
                </p>
                <p>
                    <label for="telepon">Telepon: </label>
                    <input type="text" name="telepon" placeholder="Nomor HP" />
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required />
                </p>
                
                <p>
                    <label for="foto">Foto (3x4): </label>
                    <input type="file" name="foto" required />
                    <br>
                    <small style="color: red;">*Format: JPG/PNG, Max 2MB</small>
                </p>

                <p>
                    <input type="submit" value="Daftar" name="daftar" class="btn" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>