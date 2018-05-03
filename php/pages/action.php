<!DOCTYPE html>

<html>
<head>
<title>Overerts-postcomment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/1.jpeg');">
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1 class="i_t"><a href="../index.php">Bob's Bud</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="full-width.php">About Us</a></li>
        </ul>
      </nav>

    </header>
  </div>
  <div id="breadcrumb" class="hoc clear">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="full-width.php">About Us</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear">
    <div class="content">
      <h1><u>Expanding their Experience</u></h1>
      <img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="">
      <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
      <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
      <img class="imgl borderedbox inspace-5" src="../images/demo/imgl.gif" alt="">
      <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
      <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more website templates visit our <a href="http://www.os-templates.com/">free website templates</a> section.</p>
      <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
      <div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#"><?php echo $_POST["name"];?></a>
                </address>
                <p><?php echo $_POST["email"];?></p>
              </header>
              <div class="comcont">
                <p><?php echo $_POST["comment"];?></p>
              </div>
            </article>
          </li>
          <li>
        </ul>
        <h2>Write A Comment</h2>
        <form action="action.php" method="get">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
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
  </footer>
</div>
<div class="wrapper quicklinks">
  <nav class="hoc clear">
    <ul class="nospace">
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="../overerts/pages/full-width.html">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="index.php">Blog</a></li>
    </ul>
  </nav>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
