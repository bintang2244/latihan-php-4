<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <!-- content will go here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<!DOCTYPE html>
<html>
<head>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Akun email anda</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kata Sandi</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kata sandi">
    </div>
    <button type="submit" class="btn btn-primary">Masuk</button>
  </form>

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Layanan kami</h5>
      <p class="card-text">Kami menawarkan berbagai layanan profesional yang di rancang untuk membantu anda.</p>
      <a href="#" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>

  <h1>Kontak Kami</h1>
  <form action="proses_kontak.php" method="post"> 
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="Doni"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="doni@upjacid"><br><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="laki-laki" name="gender" value="L">
    <label for="laki-laki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="gender" value="P" checked>
    <label for="perempuan">Perempuan</label><br><br>

    <label for="tgl_lahir">Tanggal Lahir:</label>
    <input type="date" id="tgl_lahir" name="tgl_lahir" value="1994-05-08"><br><br>

    <input type="submit" value="Submit">
  </form> 
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<title>Website</title>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: #000;
}

.content {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-top: 20px;
}

.image-container {
  width: 200px;
  height: 200px;
  border: 1px solid #ccc;
  overflow: hidden;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.text {
  padding: 20px;
  border: 1px solid #ccc;
}

footer {
  text-align: center;
  padding: 20px;
  background-color: #f0f0f0;
}
</style>
</head>
<body>

<div class="container">
  <h1>Website</h1>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">About Us</a>
  </div>
</div>
  
</p>
<a href="#">Selengkapnya</a>
</div>
</div>

<footer>
<p>Copyright &copy; 2023 Website. All rights reserved.</p>
<p>Link: <a href="https://www.google.com/">Google</a>, <a href="https://www.facebook.com/">Facebook</a></p>
<p>Link kampus: <a href="https://www.ups.edu/">UPS</a></p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami | Zahid</title>
</head>
<body>
    
<form action="konfirmasi.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="gender">Jenis Kelamin:</label><br><br>
    <input type="radio" name="gender" value="Laki-Laki">Laki-laki<br>
    <input type="radio" name="gender" value="Perempuan">Perempuan<br>

    <label for="birthday">Tanggal Lahir:</label>
    <input type="date" id="birthday" name="birthday">

    <input type="submit" value="submit">
</form>

</body>
</html>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$birthday = $_POST["birthday"];

echo("Nama: {$name} <br>");
echo("E-Mail: {$email} <br>");
echo("Jenis Kelamin: {$gender} <br>");
echo("Tanggal Lahir: {$birthday} <br>");
?>

