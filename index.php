<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
</head>
<style>
    .menu {
  background-color: #333;
  overflow: hidden;
}

.menu a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 15px 20px;
  text-decoration: none;
  color: #fff;
}
nav ul li a:hover {
  background-color: #555;
}

.menu a:hover {
  background-color: #ddd;
  color: black;
}

.menu a.active {
  background-color: #4CAF50;
  color: white;
}
body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: Arial, sans-serif;
}

.navbar {
    width: 100%;
    overflow: hidden;
    background-color: #333;
    display: flex;
    justify-content: center;
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.content {
    width: 100%;
    padding: 20px;
    background: #fff;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    margin: 60px;
}

.content h2 {
    color: #333;
}

.content img.homepage-image {
    max-width: 50%;
    height: auto;
    margin-top: 20px;
}

.content p {
    color: #666;
    line-height: 1.6;
    margin-top: 20px;
}
</style>
<body>

<div class="menu">
  <a href="index.php">Beranda</a>
  <a href="login.php">Login</a>
  <a href="loop.php">Loop</a>
  <a href="profil.php">Profil</a>
  <div class="content">
        <h2>SELAMAT DATANG DI PROFIL SAYA</h2>
        <img src="Profil Saya.jpg" alt="Deskripsi Gambar" class="homepage-image">
        <p>INI ADALAH HALAMAN BERANDA SAYA</P>
        <P>Pertama saya memasuki dunia perkuliahan di jurusan Manajemen Informatika. Bagi sebagian orang, mungkin ini adalah jurusan yang kurang populer dibandingkan dengan Teknik Informatika atau Ilmu Komputer, namun bagi saya, ini adalah pilihan yang sangat tepat.</p>
        <p>Pada semester pertama, kami memulai dengan mata kuliah dasar seperti Pengantar Teknologi Informasi dan Algoritma Pemrograman. Salah satu tugas pertama kami adalah membuat program sederhana menggunakan bahasa pemrograman Python. Saya masih ingat betapa menantangnya tugas tersebut, namun juga betapa menyenangkan saat saya berhasil menyelesaikannya. Program pertama saya adalah sebuah aplikasi kalkulator sederhana, tetapi bagi saya, itu adalah pencapaian besar.</P>
    </div>
</div>

</body>
</html>