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
     
       
      </li>
      
    </ul>
      
   
  </div>

</nav>
      
      
        
       
       <div id="myDIV3" class="content" >
           
      
           
           
           
           <form method="post">
           
               
              <center> <h1> <span class='badge  badge-dark'>Forgot Password ?</span></h1></center><br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
        <input type="email" class="form-control" name="f" placeholder="Email">
   
      </div>
  </div>
 
                           
  
          
          
  <div class="form-group row">
      
    <div class="col-sm-10">
      <button type="submit" name="rp" class="btn btn-primary">Reset Password</button>
        
  
    </div>
           
  
 </div>  <small id="passwordHelpBlock" class="form-text text-muted">
   We will send you, your password through your registered email.
</small><?php
 
           if(isset($_POST['rp']))
     {
                $uf=$_POST['f'];
                $cstrong=True;
                $token=bin2hex(openssl_random_pseudo_bytes(64,$cstrong));
                $get_user="select * from users where email='$uf'";
        $run_user= mysqli_query($con,$get_user);
        $row= mysqli_fetch_array($run_user);
        $usr_id=$row['ID'];
         $sql="INSERT INTO password_token(tokens,uid) VALUES('$token','$usr_id')";
     $query= mysqli_query($con, $sql);
     if($query)
     {
         echo"<div class='alert alert-primary' role='alert'>    Email sent</div> ";
             
     }
      
           }
      ?>  
</form>
   
    
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body> 


</html>
