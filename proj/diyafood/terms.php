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
        <link rel="stylesheet" type="text/css" href="style3.css">
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
      <li class="nav-item active">
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
        <div id='aa'>
            <strong> <h4  class="font-weight-bold">Limitation of Liability</h4></strong>
          
 <p >In no event will Foodle be liable for any special, incidental, exemplary, punitive or consequential
 damages (including loss of use, data, business or profits) arising out of or in connection with these API Terms, whether such liability arises from any claim based upon 
 contract, warranty, tort (including negligence), strict liability or otherwise, and whether or not it has been advised of the possibility of such loss or damage. The foregoing limitations will survive and apply
 even if any limited remedy specified in these API Terms is found to have failed of its essential purpose.</p>
           <br> 
            <h4>Privacy</h4>
 <p class="font-italic">Any personal information that you provide to Foodle is subject to our Privacy Policy, which governs 
     our collection and use of personal information. As part of providing you the Foodle API, we will send you certain communications,
     such as service announcements and administrative messages, which you cannot opt-out from receiving.</p>
             <br>
            <h4 >License</h4>
            <p class="font-italic">Subject to the terms and conditions of these API Terms, Foodle grants you a nonexclusive, non-transferable license to: (a) use the Foodle API to develop, implement, and integrate
 interfaces to the Foodle Services, which permit the websites, applications, and services you provide (your "Service") to utilize the Foodle Services; (b) to access and use the Foodle Services 
 through your Service and display Foodle Content on and through your Service (which you may modify in order to format it for display on your Service); and (c) use and display the Foodle logo that Foodle makes available for use 
 with the Foodle Services ("Foodle Logo") with your Service in order to identify that the Foodle Services are from Foodle.</p>
         <br><br><h4>Terms and Conditions</h4>
            <p class="font-italic">The license to access and use the Foodle Services and Foodle Content through the Foodle API is conditioned on your compliance with the following terms and conditions: </p>
           <p class="font-italic">In certain circumstances, Foodle may require (and reserves the right to require) that prior to your use or incorporation of Foodle Services into your Service, you provide Foodle
with examples of your proposed use of the Foodle Services (and any Foodle Content) in your Service for Foodle’s prior approval, which it may give in its sole discretion.  </p>
     <p class="font-italic">  You acknowledge that the availability of Foodle Services (and any Foodle Content) is subject to change and Foodle may restrict access to, modify, suspend or terminate any or all
       of the Foodle Services, Foodle Content or Foodle API. You will promptly remove and not display (or archive) any Foodle Content that 
       has been removed by Foodle or for which Foodle has notified you that such Foodle Content must be immediately removed.</p> 
<p class="font-italic"> You may not copy, store, or archive any of Foodle Content and/or extract any data from it, unless you have Foodle’s prior written permission to do so.
You must to abide by the limitations on access, calls, and use of the Foodle API ("rate limits") that are set by Foodle. You may not attempt to circumvent those rate limits unless you prior written authorization from Foodle. 
If you exceed these rate limits (or Foodle believes that you have attempted to do so) you may be charged additional fees or your ability to access the Foodle API and/or use the Foodle Services (or Foodle Content) may be temporarily
or permanently blocked. Foodle may monitor your access and use of the Foodle Services (and Foodle Content) to ensure your compliance with these API Terms.       
</p>   
 <p class="font-italic"> You may not (or attempt to) interfere, by-pass, or disable any features or functionality that is embedded or included with the Foodle Services, Foodle Content or Foodle API, including the reporting of any data, usage statistics 
     or other information regarding your (or your users’) access and use of the Foodle Services or any Foodle Content.   </p>   
   <p class="font-italic"> You may not use or access the Foodle API for purposes of monitoring the availability, performance or functionality of the Foodle Services or for any other benchmarking or competitive purposes.
Foodle reserves the right to deliver advertisement in connection with the Foodle Services and Foodle Content ("Ads"). You may not (or attempt to) remove, disable, circumvent or obscure any Ads within the Foodle Services or
Foodle Content without the prior written consent of Foodle</p> 
 <p class="font-italic"> You may not use the Foodle API to: (i) engage in a business activity that directly conflicts with, or places you in a conflicting position to that of Foodle or with the Foodle Services, or that may reasonably be deemed to be intended to divert and/or
  drive audience traffic away from Foodle’s Services, or (ii) except as expressly authorized herein, develop (or instruct any third party to develop) a service that may reasonably be deemed to be directly competitive with the Foodle Services, unless you have been 
  specifically permitted to do so in a separate written agreement with Foodle prior to the undertaking of the development and launch of such service.</p>      
  
 <h4>Ownership</h4>
 <p class="font-italic">You acknowledge that Foodle  owns all worldwide right, title and interest in and to the Foodle  API, Foodle  Services and Foodle  Logo, including all intellectual property rights therein. You agree not to do anything inconsistent with such ownership. All use of the Foodle  Logo, and all goodwill arising out of such use, inures to Foodle’s benefit. Any and all rights not specifically granted herein to you are reserved by Foodle . You may provide Foodle  with comments, suggestions, or feedback regarding the Foodle  API and/or the Foodle  Services ("Feedback"), provided that you agree that Foodle  will be free to use, disclose, reproduce, license or otherwise distribute, and exploit such Feedback as it sees fit, 
     entirely without obligation or restriction of any kind on account of intellectual property rights or otherwise.</p>       
      <h4>Confidential Information</h4>
      <p class="font-italic">You may be given access to certain non-public information, software and/or specifications relating to the Foodle  API or the Foodle  Services ("Confidential Information"), which is confidential and proprietary to Foodle . You may use this Confidential Information only as necessary in exercising your rights granted in these API Terms. You may not disclose any of this Confidential Information to any third party without Foodle ’s prior written consent. You agree that you will protect this Confidential Information from unauthorized use, access, or disclosure in the same manner that you would use to protect your own confidential and proprietary information of a similar
  nature and in any event with no less than a reasonable degree of care.</p>
      <h4> Termination</h4>
      <p class="font-italic">Foodle  may suspend your access to the Foodle  API and/or use of the Foodle  Services (or if necessary, terminate your licenses) if you breach these API Terms  </p>
          
                  
        </div>


       
        
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>




