<?php
    // Set user number
    $con = mysqli_connect("localhost","root","","userregistration");
    
    //Get question
    $query = "SELECT * FROM usertable";

    $use = mysqli_query($con, $query);
    
    //Get result
    
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Administrator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="Mr NGEUTSA">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="adminhome.php"><img src="images/logo.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="adminhome.php">Home</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="usertable.php">All Users</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      <!-- header section end -->
      <!-- content start -->
      <div class="container">
         <h1 align="center">Student Details</h1>
      </div>
      <div class="table">
               <table align="center">
                  <tr>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>username</th>
                     <th>Email</th>
                     <th>Password</th>
                  </tr>

                  <?php
                    while($user = mysqli_fetch_assoc($use)){
                        echo '
                        <tr>
                     <td>'.$user["firstname"].'</td>
                     <td>'.$user["lastname"].'</td>
                     <td>'.$user["username"].'</td>
                     <td>'.$user["email"].'</td>
                     <td>'.$user["password"].'</td>
                  </tr>
                        ';
                    }
                  ?>
               </table>
               <div class="container" align="center">
                  <a href="createuser.php"><button class="btn btn-primary"> Create New User </button></a>
               </div>
            </div>
      <!-- content end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6 margin_top">
                     <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call Now +237 671948884</span></a></div>
                     <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span class="padding_left_15">speco@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <div class="footer_logo"><a href="adminhome.php"><img src="images/footer-logo.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">speco © 2022 All Rights Reserved.</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

