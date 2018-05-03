<?php include("server.php");?>
<!DOCTYPE html>

<html>
<head>
<title>Overerts | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/1.jpeg');">
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1 class="i_t"><a href="../index.php">Bob's Bud</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="pages/full-width.php">About Us</a></li>
        </ul>
      </nav>

    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Sigh Up</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
      <form method ="POST" action="register.php">
      <?php include('errors.php'); ?>
        <table> 
          <tr> 
            <td>First Name:<input type="text" name="fname"></td>
            <td>Last Name:<input type="text" name="lname"></td>
          </tr>
          <tr>
            <td>username:<input type="text" name="username"></td>
            <td>password:<input type="password" name="password"></td>
          </tr>
          <tr>
            <td>E-Mail:<input type="email" name="email"></td>
          </tr>
          <tr>
            <td><input type="submit" name="reg_user"></td>
            <td><input type="reset" name="reset"></td>
          </tr>
          <tr>
            <td>Already a member? <a href="login.php">Sign in</a></td>
          </tr>    
        </table>  
      </form>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">About Us</h6>
      <p>At BOB'S BUD, we believe everyone deserves to have a Blog. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own blog. We're excited to help you on your journey!</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Contact Us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Creators</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Raj Shah</a></h2>
            <h2 class="font-xs block btmspace-10">Founder</h2>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Saumitra Upadhyay</a></h2>
            <h2 class="font-xs block btmspace-10">Founder</h2>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper quicklinks">
  <nav class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="nospace">
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="../overerts/pages/full-width.html">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="index.php">Blog</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>