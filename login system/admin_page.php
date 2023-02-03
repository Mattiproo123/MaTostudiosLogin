<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
      *{
         text-decoration: none;
      }
      body{
      }
      .navbar{
         background: rgb(0, 255, 0); font-family: calibri; padding-right: 15px; padding-left: 15px;
      }
      .navdiv{
         display: flex; align-items: center; justify-content: space-between;
      }
      .logo a{
         font-size: 40px; font-weight: 600; color: black; font-family: forte;
      }
      li{
         list-style: none; display: inline-block;
      }
      li a{
         color: white; font-size: 18px; font-weight: bold; margin-right: 25px; transition: 0.25s;
      }
      li a:hover{
         color: #333;
      }
      button{
      background: #333; margin-left: 10px; border-radius: 5px; padding: 10px; width: 90px; transition: 0.25s;
      }
      button a{
         color: white; font-weight: bold; font-size: 15px;
      }
      button:hover{
      background: rgb(0, 255, 0);
      }
   </style>

</head>
<body>
   <nav class="navbar">
      <div class="navdiv">
      <div class="logo"><a href="#">MaTo Studios</a> </div>
      <ul>
         <li><a href="#">home</a></li>
         <li><a href="#">about</a></li>
         <li><a href="#">contact</a></li>
         <button><a href="logout.php">Logout</a></button>
      </ul>
   </nav>
   
<div class="container">
<div class="wrapper">
    <div class="typing-demo">
    <div class="content">
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
    </div>
</div>
</div>

</body>
</html>