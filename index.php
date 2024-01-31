<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Login</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
           <div class="title signup">Form Registrasi</div>
      </div>
      <center>
      <?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username dan Password Tidak Sesuai!</div>";
		}
	}
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "belum_login") {
			echo "<div class='alert'>Anda Harus Login Dulu!</div>";
		}
	}
	?>
    </center>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form method="POST" action="login.php" class="login">
            <pre>
            </pre>
            <div class="field">
              <input type="text" name="username" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          </form>
          <form action="register.php" method="post" class="register">
            <div class="field">
              <input type="text" name="nama" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
              <input type="text" name="username" placeholder="Masukan Email" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <label></label>
            <center>
		<br>
		<select name="level" id="level">
				<option value="user">user</option>
			</select>
		<br>
  </center>
            <div class="field btn">
              <div class="btn-layer"></div>
              
              <input type="submit" name="register" value="Daftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="index.php">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="./script.js"></script>

</body>
</html>
