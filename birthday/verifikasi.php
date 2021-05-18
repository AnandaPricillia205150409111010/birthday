<html>
<head></head>
<body>
	<?php
     session_start();
     $user = ($_POST['user']);
     $pass = ($_POST['pass']);
 
     $valid_user='Junisha Rizky Larasati';
     $valid_pass='9juni1999';
  
     if(!empty($user) and !empty($pass)){
       if ($user==$valid_user and $pass==$valid_pass) {
         $_SESSION['login'] = true;
         $_SESSION['user'] = $user;
         header('Location: index.html');
         } else{
             echo "Username atau Password salah";
         }
  }
  ?>
</body>
</html>
