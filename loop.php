<!DOCTYPE html>
<html>
<head>
    <title>Form Perulangan</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="form-box">
        <h2>Form Perulangan</h2>
        <form method="post" action="result.php">
            <div class="textbox">
                <input type="text" placeholder="Masukkan teks" name="inputText" required>
            </div>
            <div class="textbox">
                <input type="number" placeholder="Jumlah perulangan" name="repeatCount" required>
            </div>
            <input type="Submit" class="btn" value="Cetak">
        </form>
    </div>
</body>
</html>
