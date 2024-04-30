
<html lang="en"> 
<?php
session_start();
@include('baglan.php');

if(isset($_POST['submit'])){
  $username =  $_POST['username'];
  $pass = md5($_POST['password']);
  $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` ='$pass'";
  $result = mysqli_query($conn, $sql);
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['userid'] = $row['usercode'];
            $_SESSION['isAdmin']= $row['isAdmin'];
            $_SESSION['user_png'] = $row['user_png'];

            header("Location: index.php");
            exit();
        } else {
            header("Location: sign_in.php?error=".$_SESSION['username']);
            exit();
        }
    }
?>
 <head> 

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIBASE</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
              {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Quicksand', sans-serif;
              }
              body 
              {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-family: 'Quicksand', sans-serif;
                  margin: 0;
                  padding: 0;

              }
              .navbar{
                  background: #fff;
                  position: fixed;
                  top: 0;
                  width: 100%;
                  z-index: 1000;
              }
              section 
              {
                position: absolute;
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2px;
                flex-wrap: wrap;
                overflow: hidden;
                margin-top: 80px;
              }



              section .signin  
              {
                position: absolute;
                width: 400px;
                /* background: #ee2ade; */
                background: #fff;
                z-index: 1000;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                border-radius: 4px;
                box-shadow: 0 5px 3px rgb(227 175 175);
              }
              section .signin  .content 
              {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 40px;
              }
              section .signin  .content h2 
              {
                font-size: 2em;
                color: #7321a9;
                text-transform: uppercase;
              }
              section .signin  .content .form 
              {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 25px;
              }
              section .signin  .content .form .inputBox
              {
                position: relative;
                width: 100%;
              }
              section .signin  .content .form .inputBox input 
              {
                position: relative;
                width: 100%;
                background: #fff;
                border: none;
                outline: none;
                padding: 25px 10px 7.5px;
                border-radius: 4px;
                border: 2px solid #ccc; 
                color: black;
                font-weight: 500;
                font-size: 1em;
              }
              section .signin  .content .form .inputBox i 
              {
                position: absolute;
                left: 0;
                padding: 15px 10px;
                font-style: normal;
                color: black;
                transition: 0.5s;
                pointer-events: none;
              }
              .signin  .content .form .inputBox input:focus ~ i,
              .signin  .content .form .inputBox input:valid ~ i
              {
                transform: translateY(-7.5px);
                font-size: 0.8em;
                color: #fff;
              }
              .signin  .content .form .links 
              {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: space-between;
              }
              .signin  .content .form .links a 
              {
                color: black;
                text-decoration: none;
              }
              .signin  .content .form .links a:nth-child(2)
              {
                color:  black;
                font-weight: 600;
              }
              .signin  .content .form .inputBox input[type="submit"]
              {
                padding: 10px;
                background: #33CCFF;
                color: #fff;
                font-weight: 600;
                font-size: 1.35em;
                letter-spacing: 0.05em;
                cursor: pointer;
              }
              input[type="submit"]:active
              {
                opacity: 0.6;
              }
              #myVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover; /* This ensures the video covers the entire container */
                z-index: -1; /* To place the video behind other content */
              }
</style>

  <meta charset="UTF-8"> 
  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title> 

 </head> 

 <body> 


 
 <?php
 if(isset($_GET['error'])) {
  if($_GET['error'] == "Incorrect User name or password") {
      echo "<script>alert('User Name is required!')</script>";
  }
  else{
    echo "<script>alert('".$_GET['error']."')</script>";}
}

include('nav_bar.php');
?>

<video autoplay muted loop id="myVideo">
  <source src="video/video.mp4" type="video/mp4">
</video>

    </div>



    <section>
        <div class="signin">
            <div class="content">
                <h2>Sign In</h2>
                <form class="form" action="" method="post">
                    <div class="inputBox">
                    <input type="text" name="username" required autocomplete="username">

                        <i>Username</i>
                    </div>


                    <div class="inputBox">
                        <input type="password" name="password"  required autocomplete="current-password">
                        <i>Password</i>
                    </div>

                    <div class="links">
                        <a href="#">Forgot Password</a>
                        <a href="sign_up.php" id="signup-link">Sign Up</a>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit"  value="Login">
                    </div>
                </form>
            </div>
        </div>






       
 </body>

</html>