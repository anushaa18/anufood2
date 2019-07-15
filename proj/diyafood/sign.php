<!DOCTYPE html>


     
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
         <link rel="stylesheet" type="text/css" href="style_1.css">
  <?php include 'links.php' ; ?>
        </head>
    
        <div class="header1" >
        </div>
        <div class="header">
     
        </div>
       <form method="post" action=" " />
       
       
       <div id="em" class="header">Email <br>
            <input placeholder="Email" type="email" name="name" required="required" style="font-size: 14px;color:white;padding: 3px; border-radius:4px;">
            </div>
        
        <div id="pas" class="header"> Password<br>
            <a href="fp.php" style="text-decoration: none;color: white;"> <input placeholder="password" style="font-size: 14px;color: white;padding: 3px; border-radius:4px;"type="password" required="required" name="passw"/><br><br>
                Forgot password ?</a>
        </div>
       
        <input type="submit"  name="s1" class="submit1" value="login" />
         </form>
           <form method="post" action="sign.php" />
        <div class="main">
            <div id="left" class="main">Foodle helps you cook find and share recipes with your friends</div>
            <div id="right" class="main">Create an account</div>
            
            <div id="form" class="main">
                <input placeholder="Firstname" type="text" id="namebox" name="name1"/><input placeholder="Lastname" type="text" id="namebox" name="name2"/><br>
                <input placeholder="Email" type="email" name="mail" id="mailbox"/><br>
                <input placeholder="Password" type="password" name="pass" id="mailbox"/><br>
                <input placeholder="Re-enter password" type="password" name="repass" id="mailbox"/><br>
                <input type="date" name="bdy" id="namebox"/><br><br>
                <input type="radio" name="gender" value="male" />Male
                <input type="radio" name="gender" value="female" />Female<br><br>
                By clicking on 'Create an Account' you agree to our Terms and Conditions<br><br>
                 </div>
        </div>
             
            <input type="submit" name="s2" class="button2" value="Signup" />
        </form>
         
</html>
<?php

$host='localhost';
$user='root';
$pass='';
$db='train';
$con= mysqli_connect($host, $user, $pass, $db);
if($con){
    echo'connection sucess';
}

if(isset($_POST['s2']))
    {

   $fname= mysqli_real_escape_string($con,$_POST['name1']);
     $lname=mysqli_real_escape_string($con,$_POST['name2']);
    $password=mysqli_real_escape_string($con,$_POST['pass']);
      $rpassword=mysqli_real_escape_string($con,$_POST['repass']);
      $gen=mysqli_real_escape_string($con,$_POST['gender']);
    $em=mysqli_real_escape_string($con,$_POST['mail']);  
    $birthdy=mysqli_real_escape_string($con,$_POST['bdy']);
    $posts="no";
    $st="unverified";
    $ver_code= mt_rand();
    
    $check_email="select * from users where email='$em'";
    $run_email=mysqli_query($con,$check_email);
    $check= mysqli_num_rows($run_email);
    if($check==1)
    {
        echo "<script>alert('Email already exists,please try another')</script>";
        exit();
    }
    
  $sql="INSERT INTO users(firstname,lastn,password,email,birthday,gender,user_img,usr_regdate,ver_code,status,posts) VALUES('$fname','$lname','$password','$em','$birthdy','$gen','p2.JPG',NOW(),'$ver_code','$st','$posts')";
     $query= mysqli_query($con, $sql);
     if($query)
     {
         echo"<h1 style='width:400px;text-allign:justify;color:white;'>Hello ,$fname, your account is created,please check your email for completion</h1>";
     }
     else{
         echo"<script>alert('Registration failed,please try again')</script>";
     }
    } 
    ?>
<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='train';
$con= mysqli_connect($host, $user, $pass, $db);
    if(isset($_POST['s1']))
    {
        $e=mysqli_real_escape_string($con,$_POST['name']); 
        $p=mysqli_real_escape_string($con,$_POST['passw']);
        $select="select * from users where email='$e' AND password='$p' ";
        $q=mysqli_query($con,$select);
    $check_u= mysqli_num_rows($q);
    if($check_u==1)
    {
          $_SESSION['email']=$e;
        echo "<script>window.open('friends.php','_self')</script>";
      
      
    }
    else{
       echo "<script>alert('invalid credientials ,please try again')</script>"; 
    }
    }
?>