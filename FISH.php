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

<nav class="navbar  navbar-dark fixed-top " style="background: #00002e;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="container">
      <a href="https://localhost/project/BeFresh(2)/BeFresh/index.php"><img src="images/Screenshot_100.png" alt="logo" class="logo rounded-circle"></a>
    </div>
    
      
      
      
      
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
    <li class="nav-item" >
        <a class="nav-link"  href="MEAT.php">🍗 MEAT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="FISH.php">🐟 FISH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="VEGETABLE.php">🥦 VEGETABLE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FRUITS.php">🥭 FRUITS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DAIRY.php">🐄 DAIRY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="GROCERY ESSENTIALS.php">🛒 GROCERY ESSENTIALS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="BEVERAGE.php">🥤 BEVERAGE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="COSMETICS.php">💄 COSMETICS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="BABY FOOD.php">🍼 BABY FOOD</a>
      </li>
    </ul>
  </div>
</nav>
    
     
     </div> <!---/prdouctsss-->
        <div class="offersub1" id="Offers">
            <h2 class="text-center text-capitalize copyright"><b>FISH</b></h2>

            <div class="col-12 py-3 px-5 bg-secondary banner justify-content-center">
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
                            <img class="d-block w-100 slideimg subbenar" src="images/Screenshot_43.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                
                              
                              </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg subbenar" src="images/Screenshot_43.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                
                              
                              </div>
                            
                        </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slideimg subbenar" src="images/Screenshot_43.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                                                
                              </div>

                              </div><!--/slides-->

                               </div>
            </div><!--/row-->
                    
        </div><!--/main-->
            
     
     </div> <!---/prdouctsss-->
        <div class="brands" id="Brands">
            <h2 class="text-center text-capitalize copyright"><b>Freshwater Fish</b></h2>

            </div><!--/slides-->
            
            <div class="productsss jumbotron" id="Products"style="background: #49a6d068;">
           
                

                <div class="product card"> 
                    <div class="card-header" style="position:relative;">
                    <?php
              $sql = "select * from fish where id= '1' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101680_19.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                     <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>




                   </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '2' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101591.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>

                        
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '3' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101633.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>



                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '4' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3100017_19.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>




                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '5' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101670.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>





                         </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '6' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101602.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>




                   </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '6' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101790.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>





                         </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '7' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101569.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>






                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '8' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101635.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>






                            </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '9' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101584_19.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>   
               







                 
              </div>
            </div><!--/row-->
                    
        </div><!--/main-->
     
     </div> <!---/prdouctsss-->
        <div class="offer" id="Offers">
            <h2 class="text-center text-capitalize copyright"><b>Sea Fish</b></h2>

            <div class="productsss jumbotron" id="Products"style="background: #49a6d068;">
           
               
                <div class="product card"> 
                    <div class="card-header" style="position:relative;">
                    <?php
              $sql = "select * from fish where id= '10' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101609.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>




                   </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '11' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3100251_19.jpg"  class="prod_img">
                       </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>


                        
                    </div><!--/card-body-->
                    <div class="Wired_Earphone">                   
                    </div><!---/Card-footer-->
                </div><!--/pro_2-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '12' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101635.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>



                        
                    </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '13' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><?php echo $row['pdname']; ?></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/3101903_19.jpg"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>




                        </div><!--/card-body-->
                    <div class="Smart_watch">                     
                    </div><!---/Card-footer-->
                </div><!--/pro_3-->
                <div class="product card">
                  <div class="card-header" style="position:relative;">
                  <?php
              $sql = "select * from fish where id= '14' ";
              $result = $con->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
              ?>
                        <h5><b><?php echo $row['pdname']; ?></b></h5>
                    </div><!--/card-header-->
                    <div class="card-body">
                        <img src="images/"  class="prod_img">
                        </div><!--/card-body-->
                <div class="Wired_Earphone">
                <div>
                <div class="logopic">
                <img src="images/Screenshot_54.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['aprice']; ?></h>
                     <img src="images/Screenshot_55.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['sprice']; ?></h>
                     <img src="images/Screenshot_46.png" alt="logo" class="logo1 "><h> ৳ <?php echo $row['bprice']; ?></h>
                </div>      
                </div>
                <?php
                }
              }
                ?>






            </div><!--/slides-->
             
                </div>
 </div> <!---/prdouctsss-->
    
       
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