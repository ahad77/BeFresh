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

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #641234;">
    <!-- <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="img-thumbnail rounded-circle logo"></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
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

  <div class="header d-flex justify-content-around align-items-center" style="background: #092f45;">
  <div class="logopic">
  <img src="images/Screenshot_100.png" alt="logo" class="logo rounded-circle">
  </div> 
  
  
  
  
  <div class="account">
  <nav class="navbar navbar-expand-sm amenu"> 
  
    
    <ul class="navbar-nav menus">
      <li class="nav-item border-right">
      
      <a class="nav-link text-light" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> &nbsp;</a>
     </li>
  </a>
      </li>
    </ul>
  
  </nav>
  </div>
  
  </div> arch


    <div class="container" id="home">
        
        <div class="main">
            <div class="row bg-dark">



<div class=" sidemenu col-lg-3 p-4    col-12 col-md-4  "  >
                <!-- A vertical navbar -->
          <nav class="navbar p-3 text-center justify-content-center" style="background: #641234;">

    <!-- Links -->
    <ul class="navbar-nav smenu">
      <li class="nav-item" >
        <a class="nav-link"  href="MEAT.php">🍗<span class="sbpage">MEAT</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="FISH.php">🐟 <span class="sbpage">FISH</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="VEGETABLE.php">🥦 <span class="sbpage">VEGETABLE</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FRUITS.php">🥭 <span class="sbpage">FRUITS</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DAIRY.php">🐄 <span class="sbpage">DAIRY</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="GROCERY ESSENTIALS.php">🛒 <span class="sbpage">GROCERY ESSENTIALS</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="BEVERAGE.php">🥤 <span class="sbpage">BEVERAGE</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="COSMETICS.php">💄 <span class="sbpage">COSMETICS</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="BABY FOOD.php">🍼 <span class="sbpage">BABY FOOD</span></a>
      </li>
    </ul>
  
  </nav>
              </div><!--/sidemenu-->
             <div class="col-lg-9 col-12 col-md-6 py-3 px-5 bg-secondary banner justify-content-center">
                 <!-- <div class="jumbotron" style="min-height:300px;"> -->
                <!-- <h2 class="text-center p-4">Banner</h2> -->
                    <div class="slide row">
                <div class="col-lg-12 slides">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 slideimg mainbanner" src="images/i5mrs.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                
                              
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg mainbanner" src="images/dfgfqer.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                
                              
                              </div>
                            
                        </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg mainbanner" src="images/212.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                                                
                              </div>
                            
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div><!--/slides-->
            </div><!--/slide-->
                
                <!-- </div> -->
             </div>
            </div><!--/row-->
                    
        </div><!--/main-->
     
     
            </div><!--/row-->
                    
        </div><!--/main-->
            
     
     </div> <!---/prdouctsss-->
        <div class="brands" id="Brands">
            <h2 class="text-center text-capitalize copyright">Brands</h2>

            </div><!--/slides-->
            
            <div class="productsss jumbotron" id="Products" style="background: #092f45;">
           
                           
                
                <div class="product card"> 
                    <div class="card-header" style="position:relative;">
                        <h5>All Time</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_20.png"  class="prod_img">
                        <p></p>



                   

                        
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>


                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Jhatpot</h5> 
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_24.png"  class="prod_img">
                        <p></p>



                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>
                        

                              
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Work_nestle.png"  class="prod_img">
                        <p></p>


                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Jhatpot</h5> 
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_24.png"  class="prod_img">
                        <p></p>



                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>


                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>


                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>


                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>



 
                    
      
                        </div>

</div>
 </div> <!---/prdouctsss-->
        <div class="services" id="Services">
            <h2 class="text-center text-capitalize">Offers</h2>
            <div class="slide row">
                <div class="col-lg-12 slides">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                              
                              </div>
                            
                        </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                           
                              </div>


                              </div>

                                  </div><!--/row-->
                    
        </div><!--/main-->

        <div class="topsellingitem" id="topsellingitem">
            <h2 class="text-center text-capitalize copyright">Top Selling Item</h2>

            </div><!--/slides-->
            
            <div class="productsss jumbotron" id="Products" style="background: #641234;">
           
                           
                
                <div class="product card"> 
                    <div class="card-header" style="position:relative;">
                        <h5>All Time</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_20.png"  class="prod_img">
                        <p></p>



                   

                        
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>


                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Jhatpot</h5> 
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_24.png"  class="prod_img">
                        <p></p>



                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>
                        

                              
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>


                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Jhatpot</h5> 
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_24.png"  class="prod_img">
                        <p></p>



                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>


                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>


                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Mithai</h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_25.png"  class="prod_img">
                        <p></p>


                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                        <h5>Kidstar</h5>  
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/Screenshot_23.png"  class="prod_img">
                        <p></p>

            </div><!--/slides-->
             
                </div>
 </div> <!---/prdouctsss-->
        <div class="hotdeal" id="hotdeal">
            <h2 class="text-center text-capitalize copyright">Hot Deal</h2>
            <div class="slide row">
                <div class="col-lg-12 slides">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                              
                              </div>
                            
                        </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg" src="images/offer 2.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                           
                              </div>
                             
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div><!--/slides-->
            </div><!--/slide-->
        </div>
      <footer class="text-center mt-5">
      <section>
      <div class="livecustomerforecast" id="livecustomerforecast">
            <h2 class="text-center text-capitalize copyright">Live Customer Forecast </h2>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 
<div id="runningTime"></div>
 
<script type="text/javascript">
$(document).ready(function() {
 setInterval(runningTime, 1000);
});
function runningTime() {
  $.ajax({
    url: 'timeScript.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>
<br>

 
<div class="spinner-border text-success" role="status">
  <span class="visually-hidden">......</span>
</div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><b>Agora</b></div>
    </div>

<br>
<div class="spinner-border text-danger" role="status">
  <span class="visually-hidden">......</span>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><b>Shopno</b></div>
</div>
<br>
<div class="spinner-border text-warning" role="status">
  <span class="visually-hidden">......</span>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><b>The Busket</b></div>
</div>
<br>

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
?>