<?php


session_start();
$host='localhost';
$user='root';
$pass='';
$db='train';
$con= mysqli_connect($host, $user, $pass, $db);
$user=$_SESSION['email'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FOODLE</title>
        <link rel="stylesheet" type="text/css" href="style2.css"
   <link rel="stylesheet" type="text/css" href="frcss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </head>
    <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <a class="navbar-brand" href="#">Foodle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link " href="friends.php" tabindex="-1" aria-disabled="false">Learn</a>
      </li>
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="fale" >
          More
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="edit.php">Edit Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
      </li>
      
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>
      
       <div class="sideright">
          
           <img src='side/sr1.png' width='380px'  height='870px'/>
              
        </div> 
       
        
        <div class="coverpad"></div>
          <div class="coverpadx" ><img src="images/a9.jpeg" id="cover-img" class='img-rounded'height="250px"width="950px"/>
          </div>
       
        <div class="profpic"></div>
        
        
        <div class="username"><?php
        $user=$_SESSION['email'];
        $get_user="select * from users where email='$user'";
        $run_user= mysqli_query($con,$get_user);
        $row= mysqli_fetch_array($run_user);
        $usr_name=$row['firstname'];
        $userid=$row['ID'];
        $usr_image=$row['user_img'];/*
        $usr_posts="select * from posts where user_id='$userid'";
        $run_posts= mysqli_query($con,$usr_posts);
        $post= mysqli_num_rows($run_post);*/echo"$usr_name";?>
          
        
        </div>
        <div class="profpicx">
            <?php
        $user=$_SESSION['email'];
        $get_user="select * from users where email='$user'";
        $run_user= mysqli_query($con,$get_user);
        $row= mysqli_fetch_array($run_user);
        $usr_image=$row['user_img'];
            
           echo"<img src='profilepics/$usr_image' width='118px'  height='110px' />";
                    ?></div>
        <a href="post.php"> <button   class="box1">Post</button></a>
        
        
        <a href="disco.php">  <button   class="box2">Discover</button></a>
        
       <button class="box3">Saved</button>
       <div id="myDIV" class="content"> </div>
       
    
     
       <a href="timeline.php">  <button class="box4" >Timeline</button></a>
       
        
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>

