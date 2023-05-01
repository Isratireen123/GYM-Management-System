<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Gym Fitness</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_1.css">
   <link href="boot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="boot/css/main.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">
    <link href="boot/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="boot/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />

</head>
<body>



<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">About Fitness</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active" id="a">
            <a href="#">Home</a></li>
               <?php if (!isset($_SESSION['username'])){echo'<li><a href="bmi.php" class="btn">Bmi Calcultor</a></li>
              <li><a href="meal plan.php" class="btn">Meal plan and Calories</a></li>
            <li> <a href="payment.php" class="btn">Online Payment</a></li>
            <li><a href="contact.php">Contact</a></li>
            ';
            }
            ?>
           <?php
            if(isset($_SESSION['username'])) {
              echo '<li><a href="./profile/i.php">Profile</a></li>
              <li><a href="./workouts">Workouts</a></li></li>';
              if(isset($_SESSION['admin'])) {
                echo '<li><a href="att.php">Attendance</a></li>';
              }
            }
        
            ?>
         <?php if(isset($_SESSION['admin'])) { ?>
              <li><a href="../admin/a.php">Admin Panel</a></li>
              <?php } ?>
            </ul>
    <?php




    
    if(isset($_SESSION['username']))
 {
 echo '<form class="navbar-form navbar-right" role="form" action="include/logout.php">
           
             
           
            <input type="submit" class="btn btn-success" value="Sign-out">';
}
 else echo '
        
          <form class="navbar-form navbar-right" role="form" method="post" action="include/process_login.php">
           <div class="form-group">
              
            </div>
            <div class="form-group">
              
            </div>
            <a href="logout.php" class="btn">logout</a>
          
          </form>'
           ?>
           


<div class="container">

<div class="content">
   <h3>hi, <span>user</span></h3>
   <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   
     

</div>

  </div>
              



        </div><!--/.navbar-collapse -->
      </div>
    </div>


    <div class="jumbotron">
  
  <!--too add vids
      <li>
<iframe src="http://player.vimeo.com/video/17914974" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</li>
   -->
   <ul class="bxslider">
<li><img src="img/1.jpg" /></li>
<li><img src="img/2.jpg" /></li>
<li><img src="img/3.jpg" /></li>
<li><img src="img/4.jpg" /></li>
<li><img src="img/5.jpg" /></li>
<li><img src="img/6.jpg" /></li>
<li><img src="img/7.jpg" /></li>
<li><img src="img/8.jpg" /></li>
</ul>
 </div>
   


   </div>

</div>


</body>
</html>