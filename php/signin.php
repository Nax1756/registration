<?php
   $login = filter_var(trim($_POST['signInLogin']), 
   FILTER_SANITIZE_STRING);
   $name = filter_var(trim($_POST['signInName']), 
   FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['signInPass']), 
   FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 4 || mb_strlen($login) > 90 ){
      echo 'Invalid login length';
      exit();
   } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
      echo 'Invalid name length';
      exit();
   }else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 20){
      echo 'Invalid password length (from 4 to 20)';
      exit();
   }

   $pass = md5($pass);
   
   
   $mysql = new mysqli('localhost', 'root', 'root', 'test');
   $mysql->query("INSERT INTO `users` (`login`, `name` ,`pass`) VALUES('$login', '$name', '$pass')");
   $mysql->close();

   header('location:/')   





?>  