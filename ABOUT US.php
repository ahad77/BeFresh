<?php include("dbcon.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Fresh</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body class = "body-bg">

<nav class="navbar navbar-dark fixed-top " style="background: #641234;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="container">
      <a href="https://localhost/project/BeFresh(2)/BeFresh/index.php"><img src="images/Screenshot_100.png" alt="logo" class="logo rounded-circle"></a>
    </div>
    
      
      
      
      
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="#Brands">Brands</a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link text-light" href="#Offers">Offers</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-light" href="#topsellingitem">Top Selling Item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#hotdeal">Hot Deal</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="#livecustomerforecast">Live Customer Forecast</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="ABOUT US.php">About Us</a>
      </li>

    </ul>
  </div>
</nav>

<section>

<Div class="ww">
  <br>
  <br>
  <br>
            <img src="images/33.jpg" height="0%" width="50%" heialt="">
        </Div>
        <div class="ww">
            <?php
              $sql = "select * from about_us where id= '1' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
            <h1 class="hhh">Hello I'M</h1>
            <h1 class="wel"><?php echo $row['Name']; ?></h1>
            <p><?php echo $row['Intro']; ?><br> Also I'm a full stack web developer and cyber security specialist. Currenlty working as both freelancer FSWD and CSS at multiple workplace. I can develope uniqe websites with maximum security.  </p>
            <a href="https://www.linkedin.com/in/ahadul-islam-sakib-548704188/" class="btn btn-outline-warning btn-lg " tabindex="-1" role="button" aria-disabled="true">Let's Collaborate</a>
        </div>
        <?php
                }
              }
                ?>
        
</section>
<br>
<br>


<section>
<Div class="ww">
            <img src="images/fahim.png"  height="0%" width="50%" alt="">
        </Div>
        <div class="ww">
        <?php
              $sql = "select * from about_us where id= '2' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
            <h1 class="hhh">Hello I'M</h1>
            <h1 class="wel"><?php echo $row['Name']; ?></h1>
            <p><?php echo $row['Intro']; ?><br> in massa consectetur </p>
            <a href="https://www.facebook.com/profile.php?id=100070401671515" class="btn btn-outline-warning btn-lg " tabindex="-1" role="button" aria-disabled="true">Let's Collaborate</a>
            
        </div>
        <?php
                }
              }
                ?>
        
</section>


<br>
<br>
<section>
        <Div class="ww">
            <img src="images/kaiser22.png" height="40%" width="40%" alt="">
        </Div>
        <div class="ww">
        <?php
              $sql = "select * from about_us where id= '3' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
            <h1 class="hhh">Hello I'M</h1>
            <h1 class="wel"><?php echo $row['Name']; ?></h1>
            <p><?php echo $row['Intro']; ?><br> in massa consectetur </p>
            <a href="https://www.linkedin.com/in/abdullah-al-kaiser-6638bb1b1/" class="btn btn-outline-warning btn-lg " tabindex="-1" role="button" aria-disabled="true">Let's Collaborate</a>
        
        </div>
        <?php
                }
              }
                ?>
        
</section>


<br>
<br>
<section>
        <Div class="ww">
            <img src="images/IMG_1679.jpeg" height="40%" width="40%" alt="">
        </Div>
        <div class="ww">
        <?php
              $sql = "select * from about_us where id= '4' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
            <h1 class="hhh">Hello I'M</h1>
            <h1 class="wel"><?php echo $row['Name']; ?></h1>
            <p><?php echo $row['Intro']; ?><br> in massa consectetur </p>
            
            <a href="https://www.facebook.com/Sa.Zid2345" class="btn btn-outline-warning btn-lg " tabindex="-1" role="button" aria-disabled="true">Let's Collaborate</a>
        </div>
        <?php
                }
              }
                ?>
               
        
</section>


<br>
<br>
<section>
        <Div class="ww">
            <img src="images/nazifa.png" height="40%" width="40%" alt="">
        </Div>
        <div class="ww">
        <?php
              $sql = "select * from about_us where id= '5' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
            <h1 class="hhh">Hello I'M</h1>
            <h1 class="wel"><?php echo $row['Name']; ?></h1>
            <p><?php echo $row['Intro']; ?><br> in massa consectetur </p>
            
            <a href="https://www.facebook.com/naji.fa.733" class="btn btn-outline-warning btn-lg " tabindex="-1" role="button" aria-disabled="true">Let's Collaborate</a>
        </div>
        <?php
                }
              }
                ?>
               
        
</section>



            
 
<footer class="text-center mt-5">
<div>
  <div class="row">
    <div class="col">
    <ul><p class="icon"><b>befresh.com.bd</b></p>
          <li class="copyright">Terms & Condition</li>
          <li class="copyright">Privacy and Cookie Policy</li>
          <li class="copyright">Search Terms</li>
          <li class="copyright">Advanced Search</li>
          <li class="copyright">Contact Us</li>
        </ul>
    </div>
    <div class="col">
    <ul><p class="icon"><b>Get to know us</b></p>
          <li class="copyright">Corporate</li>
          <li class="copyright">Suppliers</li>
          <li class="copyright">Careers</li>
          <li class="copyright">Product Care Plans</li>
          <li class="copyright">Subscribe</li>
        </ul>
    </div>
    <div class="col">
    <ul><p class="icon"><b>In the spotlight</b></p>
          <li class="copyright">Grocery & Gourmet</li>
          <li class="copyright">Beverages</li>
          <li class="copyright">Breakfast & Cereal</li>
          <li class="copyright">Meals</li>
          <li class="copyright">Canned Goods</li>
        </ul>
    </div>
  </div>
</div>

      <div >
            <h6>Stay Connected</h6>
            <img src="images/fbb.png" height="2%" width="2%" >
            <img src="images/linked.png" height="2%" width="2%" >
            <img src="images/ig.png" height="1.56%" width="1.56%">
        </div>  
      <h5 class="icon">Hotline: +31005681 | info@befresh.com.bd</h5>
      <div class="fcp">  
      <small ><b><span class="copyright">©2021 | <img src="images/Screenshot_100.png" height="20px" width="20px"> BeFresh Ltd. All rights reserved. Developed By</span> <span class="icon">Grow More Web tech Ltd.</span> Chattogram, Bangladesh. <b></small>
</div>
</div>
</footer>

        <div class="scroll-top-wrapper ">
          <span class="scroll-top-inner">
            <i class="fa fa-2x fa-arrow-circle-up"></i>
          </span>
        </div>
    </div><!--/wrapper-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  //Thanks to: http://www.webtipblog.com/adding-scroll-top-button-website/

$(document).ready(function(){

$(function(){
 
    $(document).on( 'scroll', function(){
 
    	if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});




</script>
</body>
</html>