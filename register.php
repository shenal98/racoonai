<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<title>Raccoon AI - Home</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  
}

* {
  box-sizing: border-box;
  
}

/* Add padding to containers */
.container {
  width: 700px;
  background-color: white;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<header class="header fixed-top">	 
	       
         <div class="branding docs-branding">
             <div class="container-fluid position-relative py-2">
                 <div class="docs-logo-wrapper">
                     <div class="site-logo"><a class="navbar-brand" href="index.php"><img class="logo-icon me-2" src="assets/images/new_logo/favicon.ico" alt="logo"><span class="logo-text">Raccoon<span class="text-alt"> AI</span></span></a></div>    

                 </div><!--//docs-logo-wrapper-->
                 <div class="docs-top-utilities d-flex justify-content-end align-items-center">
  
                     <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">

                     </ul><!--//social-list-->
                 </div><!--//docs-top-utilities-->
             </div><!--//container-->
         </div><!--//branding-->
</header><!--//header-->

<div class="card">
<form action="code.php" method="POST">
  <div class="container">
  <?php
                            if(isset($_SESSION['status']))
                            {
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);    
                            }

                        ?>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="phone"><b>contact number</b></label>
    <input type="text" name="phone" id="phone" placeholder="Enter contact number" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    
    <hr>
    

    <button type="submit" name="register_now_btn" class="btn btn-primary btn-lg btn-block login-button">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Login</a>.</p>
  </div>
</form>
</div>
                        
<!-- Javascript -->          
<script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script>
</body>
</html>