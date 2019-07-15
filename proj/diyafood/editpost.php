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
        <link rel="stylesheet" type="text/css" href="edit.css">
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
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link disabled" href="friends.php" tabindex="-1" aria-disabled="false">Learn</a>
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
    
  </div>

</nav>
  

        
 <div id="myDIV" class="content"> 
     

				
    <?php
        
            
            $ai=$_GET['id'];
            
                
              $get_posts="select * from posts where post_id='$ai' ";
        $run_user1= mysqli_query($con,$get_posts);
      while( $row1= mysqli_fetch_array($run_user1)){
         $n=$row1['title'];
       $pic=$row1['img'];
          
            $pro=$row1['post_content'];     
            }

      echo" 
          <div id='myDIV2' class='content'>
          
        <div id='columns'>
        <figure>
         <img src='uploads/$pic'height='400px' width='400px' >
          </figure></div> 
        <div id='but' class='content' >
       <button class='btn btn-danger' onclick='goBack()'>Back</button>
        </div>
<div id='myDIV3' class='content'>
<form method='post'>
<div class='form-group row'>
    <label for='inputEmail3' class='col-sm-2 col-form-label'>Title</label>
    <div class='col-sm-9'>
     <input type='text' class='form-control' id='inputEmail3' name='f' placeholder='Recipe ' value=' $n '>
    </div>
  </div>
    

 <div class='form-group row'>
    <label for='inputEmail3' class='col-sm-2 col-form-label'>Recipe</label>
    <div class='col-sm-9'>
    <textarea class='form-control' cols='55' rows='20' name='l'>$pro</textarea></br>
              
     
    </div>
  </div>
<div class='form-group row'>
      
    <div class='col-sm-10'>
      <button type='submit' name='up' class='btn btn-primary'>Update Post</button>
        
 
    </div>
           
  
 </div>
    
</form>
</div>
     
 

 
  


      ";
           if(isset($_POST['up']))
     {
              
          $uf=$_POST['f'];
          $ul=$_POST['l'];
          
          $upd="update posts set title='$uf',post_content='$ul'  where post_id='$ai' ";
   $query= mysqli_query($con, $upd);
     if($query) 
     {
          echo"<script>window.open('timeline.php','_self')</script>";
       
        
     }
          }
        ?>
 </div>
    

        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
				function goBack() 
				{
					window.history.back();
				}
				</script>
    </body>


</html>



