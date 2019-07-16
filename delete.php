<?php


session_start();
$host='localhost';
$user='root';
$pass='';
$db='train';
$con= mysqli_connect($host, $user, $pass, $db);


    $pid=$_GET['id'];
    $del="delete from posts where post_id= '$pid' ";
         $query= mysqli_query($con, $del);
     if($query) 
          {
          echo "<script><div class='alert alert-primary' role='alert'>post has been deleted!</div></script>";
          echo"<script>window.open('timeline.php','_self')</script>";
      }
      else
      {
          
          echo"faileeeeed";
}

?>