<?php
      include_once 'loginCheck.php';
      include_once './phpStuff/coreFunctions.php';
?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <!-- basic -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
            <!-- mobile metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1, maximum-scale=1">

            <title>Admin Login - Alvardah</title>
            <link rel="icon" href="favicon.png" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="./bootstrap/dist/css/bootstrap.min.css">

      
      <style type="text/css">


            img[alt="www.000webhost.com"] {
                  display: none;
            }
      
            body {
                  background-image: url(./pix/bg-light.jpg);
            }

            .form-container {
                  display: flex; 
                  justify-content: center;
                  align-items: center; 
                  height: 100vh; 
                  width: 100vw;
            }

            .form {
                  background: #f1f1f1;
                  box-shadow: 3px 3px 3px grey;
                  border-radius: 30px;
                  overflow: hidden;
                  padding: 40px;
                  width: 65%;
            }


            .row input {
                  width:90%;
            }
            .row i {
                  font-size:30px;
                  padding: 5px;
                  float: left;
            }

            .forgot-password {
                  color: #0275d8;
                  text-decoration: underline;
                  cursor: pointer;
            }

            @media only screen and (max-width: 768px){

                  .row input {
                        width:80%;
                  }

                  .form {
                  background: #f1f1f1;
                  box-shadow: 3px 3px 3px grey;
                  border-radius: 30px;
                  overflow: hidden;
                  padding: 40px;
                  width: 95%;
                  }

                  .row i {
                  font-size:30px;
                  padding: 5px;
                  float: left;
                  margin-right: 10px;
                  }
            }

      </style>

      </head>

      <body class="bg-light" >
            <div class="container form-container">      
                  
                  <form class="form" action="loginCheck.php" method="POST">
                        
                        <h2 class="alert alert-success" align="center">Admin Login</h2><br/>

                        <?php
                              if (isset($_SESSION['message'])) {?>
                                    
                                    <div class="alert alert-danger text-center">
                                          <?php echo $_SESSION['message']; ?>
                                    </div>
                                    <?php
                                    
                                    unset($_SESSION['message']);
                              }
                        ?>

                        <div class="mb-3 row">

                              <i class="fas fa-user"></i>
                              <input name="adminName" type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <br>
                        <div class="mb-3 row">
                              <i class="fas fa-key"></i>
                              <input name="adminPass" type="password" class="form-control"placeholder="Password" required>
                        </div>
                        <p align="right" class="forgot-password"><a href="reset_password.php">Forgot Password</a></p>
                        <p align="center"><br>
                              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </p>
                  </form>
            </div>
      
      <script src="https://kit.fontawesome.com/de41999cf3.js"></script>
      </body>