<?php


session_start();
$host='localhost';
$user='root';
$pass='';
$db='train';
$con= mysqli_connect($host, $user, $pass, $db);

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
      <li class="nav-item active">
          <a class="nav-link" href="friends.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
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
      
      
        
       
       <div id="myDIV3" class="content" >
           
         <?php
        $user=$_SESSION['email'];
        $get_user="select * from users where email='$user'";
        $run_user= mysqli_query($con,$get_user);
        $row= mysqli_fetch_array($run_user);
        $usr_name=$row['firstname'];
        $usr_lname=$row['lastn'];
        $userid=$row['ID'];
        $im=$row['user_img'];
        $userpass=$row['password'];
       $user_gen=$row['gender'];
       $user_bd=$row['birthday'];
           ?>
           
           
           
           <form method="post">
           <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputEmail3" name="f" placeholder="First Name" value="<?php echo $usr_name;?> ">
    </div>
  </div>
           <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="l" placeholder="Last Name" value="<?php echo $usr_lname;?> ">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8">
        <input type="email" name="e" class="form-control" id="inputEmail3" placeholder="Email"value="<?php echo $user;?> ">
   
     <small id="passwordHelpBlock" class="form-text text-muted">
      The email to where you get your notification,not the email to which you log in ,it will not change.
</small> </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" name="p" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $userpass;?> ">
      <small id="passwordHelpBlock" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
    </div>
  </div>
               <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Profile Image</label>        
                   <div class="col-sm-8">
                   <label for="imageUpload" class="btn btn-secondary btn btn-block btn-outlined">Choose Image</label>   
               
                   <input type='file' value='' name='imageUpload' id='imageUpload' accept='image/*' style='display: none' width='3px' />
                <small id="passwordHelpBlock" class="form-text text-muted">
   Click on Choose Image to insert an image to your post.
</small>
                    </div>     </div>            
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
       <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="g" placeholder="Gender" value="<?php echo $user_gen;?> ">
       </div>
    </div>
  </fieldset>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Birthday</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="inputEmail3" name="f" disabled="disabled"placeholder="First Name" value="<?php echo $user_bd;?> ">
    </div>
  </div>       
          
  <div class="form-group row">
      
    <div class="col-sm-10">
      <button type="submit" name="up" class="btn btn-primary">Update Profile</button>
        
  
    </div>
           
  
 </div><?php
 $user1=$_SESSION['email'];
        $get_user1="select * from users where email='$user1'";
        $run_user1= mysqli_query($con,$get_user1);
        $row1= mysqli_fetch_array($run_user1);
      
        $userid1=$row['ID'];
           if(isset($_POST['up']))
     {
               
              
               
               
               
               
          $uf=$_POST['f'];
          $ul=$_POST['l'];
          $f=$_POST['imageUpload'];
          $up=$_POST['p'];
           $ue=$_POST['e'];
          $ug=$_POST['g'];
          if($f=="" & $ue=="")
          { 
             $upd="update users set firstname='$uf',lastn='$ul',password='$up',gender='$ug' where ID='$userid1' ";
   $query= mysqli_query($con, $upd);
     if($query) 
     {
          echo"<script>window.open('edit.php','_self')</script>";
        echo"<div class='alert alert-success' role='alert'>post has been deleted!</div>";
        
     }
          }   
         elseif ($ue<>"" )
             {
              $upd2="update users set firstname='$uf',lastn='$ul',email='$ue' ,password='$up',gender='$ug' where ID='$userid1' ";
   $query2= mysqli_query($con, $upd2);
     if($query2) 
     {
          echo"<script>window.open('sign.php','_self')</script>";
        
     }
             
          } 
          
          else {
              
            
       $upd="update users set firstname='$uf',lastn='$ul',password='$up',gender='$ug',user_img='$f'  where ID='$userid1' ";
   $query= mysqli_query($con, $upd);
     if($query) 
     {
          echo"<script>window.open('edit.php','_self')</script>";
        echo"<div class='alert alert-success' role='alert'>post has been deleted!</div>";
        
     }
      
          }
 
          }
          
     
?>
</form>
   
    
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body> 


</html>
