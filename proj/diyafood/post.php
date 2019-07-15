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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
 
  <a class="navbar-brand" href="#">Foodle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item ">
          <a class="nav-link" href="friends.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link " href="home.php" tabindex="-1" aria-disabled="false">Profile</a>
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
      
   
  </div>

</nav>
      
      <div class="sideright">
          
          <img src='side/w1.jpg' width='380px'  height='870px'/>
              
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
        <button    class="box1">Post</button>
        <div id="myDIV" class="content" >
          <?php  
            $user=$_SESSION['email'];
        $get_user="select * from users where email='$user'";
        $run_user= mysqli_query($con,$get_user);
        $row= mysqli_fetch_array($run_user);
       
        $userid=$row['ID'];?>
            <form  method="post" id="f" enctype="multipart/form-data" > 
                <h2> <span class='badge  badge-dark'>Whats Cooking?</span></h2>
          
                <label for="imageUpload" class="btn btn-danger btn btn-block btn-outlined">Choose Image</label>   
               
        <input type='file' name='imageUpload' id='imageUpload' accept='image/*' style='display: none' width='3px' /> 
                <small id="passwordHelpBlock" class="form-text text-muted">
   Click on Choose Image to insert an image to your post.
</small>
        <input type="text" placeholder="Recipe Name..." name='tt' style=' border:2px solid red; border-radius:4px;width:400px ; background-color:#3CBS8D ; color: black;'/>
        <textarea cols="80" rows="10" name="contents" placeholder="Write your recipe..." style=' border:2px solid red; border-radius:4px; background-color: #3CBS8D ; color: black'></textarea></br>
                <br><div class="col-sm-10"> 
               <button type="submit" name="sub" class="btn btn-danger">Post</button>
                </div>
              
             
         
           
            
        <?php
        $host3='localhost';
$user3='root';
$pass3='';
$db3='train';
$con33= mysqli_connect($host3, $user3, $pass3, $db3);
$user4=$_SESSION['email'];
        $get_user3="select * from users where email='$user4'";
        $run_user3= mysqli_query($con,$get_user3);
        $row3= mysqli_fetch_array($run_user3);
        $userid3=$row['ID'];
        
      
        if(isset($_POST['sub']))
        {
         $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    echo "<div class='alert alert-primary' role='alert'> </div>";
} 
else {
    echo "Sorry, there was an error uploading your file.";
    
}
        $image=basename( $_FILES["imageUpload"]["name"]); 
         $co= addslashes($_POST['contents']);
        $tl= addslashes($_POST['tt']);
         
 
     $sql="INSERT INTO posts(user_id,title,post_content,post_date,img,email) VALUES('$userid3','$tl','$co',NOW(),'$image','$user4')";
     $query= mysqli_query($con, $sql);
     if($query)
     {
         echo"<div class='alert alert-primary' role='alert'>Your Recipe has been posted!</div> ";
             $update="update users set posts='yes' where ID='$userid3'";
             $run_up=mysqli_query($con,$update);
     }
  
        }
       
        
        ?>
           </form> </div>
        
        <a href="disco.php">  <button   class="box2">Discover</button></a>
        
       
        
        
     
        <a href="timeline.php">  <button class="box3">Timeline</button></a>
       
        
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
    
    </body>


</html>


