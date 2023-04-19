use<?php
   $login = filter_var(trim($_POST['signInLogin']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['signInPass']), FILTER_SANITIZE_STRING);

   $pass = md5($pass);
   
   
   $mysql = new mysqli('localhost', 'root', 'root', 'test');
   
   $mysql->query("INSERT INTO `users` (`login`, `name` ,`pass`) VALUES('$login', '$name', '$pass')");
   
   $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
   $user = $result->fetch_assoc();
   if(count($user) == 0) {
      echo 'user not found';
      exit();
   }


   setcookie('user', $user['name'], time() + 3600, "/" );


   $mysql->close();

   header('location:/')   




?>