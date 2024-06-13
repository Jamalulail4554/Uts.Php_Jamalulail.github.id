<!DOCTYPE html>
<html>
<head>
    <title>Form Profil</title>
    <link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<body>
    <div class="form-box">
        <h2>Form Profil</h2>
        <form method="post" action="result.php">
            <div class="textbox">
                <input type="text" placeholder="NIM" name="nim" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Kelas" name="kelas" required>
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Nomor HP" name="nomor_hp" required>
            </div>
            <input type="submit" class="btn" value="Simpan">
        </form>
    </div>
</body>
</html>
