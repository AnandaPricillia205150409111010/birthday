<?php session_start();
$_SESSION['login'] = false;
?>
<html>
<head><h3>Junisha 23th!</h3></head>
<body style="text-align: center; background-color: #20CFB4;"   >
	<h1>
        Silahkan Login Dulu ya Sayy
    </h1>
<hr>
<form action="verifikasi.php" method="POST">
 <input type="text" name="user" size="20" placeholder="Nama Lengkap" required>
<br></br>
 <input type="password" name="pass" size="20" placeholder="Tanggal Bulan Tahun Lahir" required>
<br></br>
<button type="submit" style="background-color: blue; color: white;">Login</button>
</form>
</body>
</html>
