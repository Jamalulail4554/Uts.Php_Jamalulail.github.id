<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perulangan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="result-box">
        <h2>Hasil Perulangan</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputText = $_POST['inputText'];
            $repeatCount = intval($_POST['repeatCount']);
            
            for ($i = 0; $i < $repeatCount; $i++) {
                echo "<p>$inputText</p>";
            }
        }
        ?>
        <a href="loop.php" class="btn">Kembali</a>
    </div>
</body>
</html>
