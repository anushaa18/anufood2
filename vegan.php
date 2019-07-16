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
        <link rel="stylesheet" type="text/css" href="pin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </head>
 
    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
 
  <a class="navbar-brand" href="#">Foodle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="friends.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link disabled" href="home.php" tabindex="-1" aria-disabled="false">Profile</a>
      </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="fale" >
          More
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="edit.php">Edit Profile</a>
              <a class="dropdown-item" href="terms.php">Policies</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
      </li>
       
      
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php" >
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search for recipes or ingridients" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <?php
    if (isset($_POST['search']))
    {
        $searchq=$_POST['search'];
      $get_posts="select * from recipes where name LIKE '%$searchq%' OR ingridients LIKE '%$searchq%'  ";
      $run_user1= mysqli_query($con,$get_posts);
      $count= mysqli_num_rows($run_user1);
      if($count==0)
      {
          echo "<script>alert('Sorry ,there was no search results!')</script>"; 
        
      }
 else {
    
    
       $txt=$_POST['search'];
      echo"
          $txt;
            
      ";
      
         
    }}
    ?>
  </div>

</nav>
  <ul class="nav justify-content-center">
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="vegan.php">Vegan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="drinks.php">Drinks</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="egg.php">Egg</a>
  </li>
   
  <li class="nav-item">
      <a class="nav-link" href="dessert.php">Desserts</a>
  </li>
</ul>
  </ul>

      
        
<div id="columns">
    <?php
        $per_page=10;
         if(isset($_GET['page']))
         {
             $page=$_GET['page'];
         }
 else {
     $page=1;
 }
 $start_from=($page-1) * $per_page;
        
        $u=$_SESSION['email'];
        $get_posts="select * from recipes where Category='Vegan' ORDER by 1 DESC LIMIT $start_from,$per_page  ";
        $run_user1= mysqli_query($con,$get_posts);
      while( $row1= mysqli_fetch_array($run_user1)){
        $pc=$row1['name'];
       $un=$row1['pic'];
       $fid=$row1['id']; 
         /*$user="select * from users where ID='$uid' AND posts='yes'";
        $run_q=mysqli_query($con,$user);
        $row_user= mysqli_fetch_array($run_q);
        $username=$row_user['firstname'];
        $userimage=$row_user['user_img'];*/

        
        
        
        echo"
            <figure>
            <a href='fooddetails.php?id= $fid;'>
           <img src='side/$un' height='200px' width='300px'></a>
       <figcaption>$pc </figcaption>
   </figure>
            
      ";
          }
        ?>
   
           
    
</div>
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>


