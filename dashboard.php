<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="user_db";
$conn = mysqli_connect($host,$user,$pass,$db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/design3.css">
</head>
<body>
<!-- header  -->

<section class="header">
<div class="flex">
   <a href="dashboard.php" class="logo">Admin Panel</a>

   <nav class="navbar">
      <a href="dashboard.php">Home</a>
      <a href="admin_packages.php">Add Packages</a>
      <a href="AddPackages.php">See Packages</a>
      <a href="admin_bookings.php">Bookings</a>
      <a href="admin_users.php">users</a>
      <a href="admin_contacts.php">Messages</a>
     
   </nav>
</div>

  <div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class="container">
  <div class="row">
  
    <div class="col"style="font-size:30px;">total users</div>
    <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM  user_form WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
            
         ?>
         <h3><?php echo $number_of_users;?></h3>

      </div>
    <div class="col"style="font-size:30px;">bookings</div>
    <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM  book_form ") or die('query failed');
            $number_of_bookings = mysqli_num_rows($select_users);
            
         ?>
         <h3><?php echo $number_of_bookings;?></h3>

      </div>
        
      <div class="col"style="font-size:30px;">Admins</div>
    <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM  user_form WHERE user_type = 'admin'") or die('query failed');
            $number_of_admins = mysqli_num_rows($select_users);
            
         ?>
         <h3><?php echo $number_of_admins;?></h3>

      </div>
  </div>

  <div class="col"style="font-size:30px;">Total Packages</div>
    <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM  packages ") or die('query failed');
            $number_of_Packages = mysqli_num_rows($select_users);
            
         ?>
         <h3><?php echo $number_of_Packages;?></h3>

      </div>
      <div class="col"style="font-size:30px;">Total Messages</div>
    <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM  book_form ") or die('query failed');
            $number_of_Packages = mysqli_num_rows($select_users);
            
         ?>
         <h3><?php echo $number_of_Packages;?></h3>

      </div>
  </div>


  </div>

 
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>