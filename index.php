<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>

    <meta charset="utf-8">
    <title>Ludite</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/index.processed.css">
    

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets2/animate.css">
                
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets2/LineIcons.2.0.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets2/Bootstrap-4.5.0.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets2/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets2/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  	<style type="text/css">

  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

      

      p {

        font-family: 'Open Sans', sans-serif;
      }
      h1 {

         font-family: 'Open Sans', sans-serif;
      }
      h2 {

         font-family: 'Open Sans', sans-serif;
      }
      h3 {

         font-family: 'Open Sans', sans-serif;
      }
      h4 {

         font-family: 'Open Sans', sans-serif;
      }
      h5 {

         font-family: 'Open Sans', sans-serif;
      }
      h6 {

         font-family: 'Open Sans', sans-serif;
      }
      a {

         font-family: 'Open Sans', sans-serif;
      }
      span {

         font-family: 'Open Sans', sans-serif;
      }
  		
/* main-header start */
   [data-target="#mainMenu"] {
  position: relative;
  z-index: 999;
}

#mainMenu li > a {
  font-size: 12px;
  letter-spacing: 1px;
  color: #383d41;
  font-weight: 400;
  position: relative;

  z-index: 1;
  text-decoration: none;
}

.main-header.fixed-nav #mainMenu li > a {
  color: #383d41;
  background-color: red;
  text-decoration: none;
}

#mainMenu li:not(:last-of-type) {
  margin-right: 30px;
}

#mainMenu li > a::before {
  position: absolute;
  content: "";
  width: calc(100% - 1px);
  height: 1px;
  background: #383d41;
  bottom: -6px;
  left: 0;

  -webkit-transform: scale(0, 1);
  -ms-transform: scale(0, 1);
  transform: scale(0, 1);
  -webkit-transform-origin: right center;
  -ms-transform-origin: right center;
  transform-origin: right center;
  z-index: -1;

  -webkit-transition: transform 0.5s ease;
  transition: transform 0.5s ease;
}

#mainMenu li > a:hover::before,
#mainMenu li > a.active::before {
  -webkit-transform: scale(1, 1);
  -ms-transform: scale(1, 1);
  transform: scale(1, 1);
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
}

.main-header.fixed-nav #mainMenu li > a::before {
  background: #383d41;
}

.main-header {
  
  top: 0px;
  left: 0;
  z-index: 99;
  width: 100%;
  background-color: white;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  transition: all 2s;
  opacity: 0.9;
}

.main-header.fixed-nav {
  top: 0;
  background: #383d41;
  -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.main-header.fixed-nav .navbar-brand > img:last-of-type {
  display: block;
}

.main-header.fixed-nav .navbar-brand > img:first-of-type {
  display: none;
}
.navbar-brand {
  color: #383d41;
}
.main-header .navbar-brand img {
  max-width: 40px;
  animation: fadeInLeft 0.4s both 0.4s;
}
/* main-header end */
@media (max-width: 991px) {
  /*header starts*/

  .collapse.in {
    display: block !important;
    padding: 0;
    clear: both;
  }

  .navbar-toggler {
    margin: 0;
    padding: 0;
    width: 40px;
    height: 40px;
    position: absolute;
    top: 25px;
    right: 0;
    border: none;
    border-radius: 0;
    outline: none !important;
  }

  .main-header .navbar {
    float: none;
    width: 100%;
    padding-left: 0;
    padding-right: 0;
    text-align: center;
    transition: 2s;
  }

  .main-header .navbar-nav {
    margin-top: 70px;
  }

  .main-header .navbar-nav li .nav-link {
    text-align: center;
    padding: 20px 15px;
    border-radius: 0px;
  }

  /**/
  .main-header .navbar-toggler .icon-bar {
    background-color: #383d41;
    margin: 0 auto 6px;
    border-radius: 0;
    width: 30px;
    height: 3px;
    position: absolute;
    right: 0;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  .main-header .navbar .navbar-toggler .icon-bar:first-child {
    margin-top: 3px;
  }

  .main-header .navbar-toggler .icon-bar-1 {
    width: 10px;
    top: 0px;
  }

  .main-header .navbar-toggler .icon-bar-2 {
    width: 16px;
    top: 12px;
  }

  .main-header .navbar-toggler .icon-bar-3 {
    width: 20px;
    top: 21px;
  }

  .main-header .current .icon-bar {
    margin-bottom: 5px;
    border-radius: 0;
    display: block;
  }

  .main-header .current .icon-bar-1 {
    width: 18px;
  }

  .main-header .current .icon-bar-2 {
    width: 30px;
  }

  .main-header .current .icon-bar-3 {
    width: 10px;
  }

  .main-header .navbar-toggler:hover .icon-bar {
    background-color: #383d41;
  }

  .main-header .navbar-toggler:focus .icon-bar {
    background-color: #383d41;
  }
  .fullscreen-bg {


width: auto;
height: auto;
z-index: -100;
overflow: hidden;
}
.fullscreen-bgvideo{

width: auto;
height: auto;


}
.change-color {
  
    border-bottom: 0.5px solid #383d41;
}
    

  /*header ends*/
}
  	</style>

</head>
<header class="main-header  " style="height: 90px; background-color: white" id="" >
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-5">
        <div class="col-2  d-flex" style="height: 70px">
            <img src="img/logo.png" class="" style="height: 80px; width: 90px;">
                          <h4 style="color:#383d41; margin-top: auto; margin-bottom: auto;">Ludite</h4>
          </div>
        <a class="navbar-brand" href="/mojo">
          
          
                        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                        
                    </button>
        <div class="collapse navbar-collapse " id="mainMenu">
            <div class="col-9"></div>
            <div class=" col-9 ">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li class="mt-3">
              <a href="#home" class="">Главная</a>
            </li>
            
            
            
           <?php if ($_SESSION['id'] != "") {
                                  
           $con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
            $text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
            
            $query = mysqli_query($con, $text_query);
            
            $result = $query->fetch_assoc();

             echo "<li class='scroll-to-section mt-3'><a href='profile.php'>Личный кабинет</a></li>
              
                                
               <li class='scroll-to-section mt-1'><img src='".$result["img"]."'  style='height: 50px; width: 50px; margin-left: 10px; border-radius: 100%;'></li>";
           

               
               
               
            }
              else {
                 echo "<li class='mt-3'>
              <a href='log.php' >Регистрация</a>
            </li>
            <li class='mt-3'>
              <a href='log2.php' >Вход</a>
            </li>";
               }
            ?>
            
            

        

         
          
           
            

     
            
          </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>
   
    <body style="background-color: #F2F7FF">
    	
    	<div class="col-12 row" style="background-image: url(items/bg.jpg); background-size: 100% 100%; height: 1000px;">
    	
    		<div class="col-5 " style="background-color:; padding-bottom: 50px; height: 200px; top: 30%">
         <div class="col-10 mx-auto " style="height: 200px;">
           <h3 style="color: white; font-size: 40px;">Ludite - прокачай свое тело и получи за это бонусы.</h3>
        <h3 class="mt-2" style="color: white;   font-size: 20px;">Ходи, бегай, гуляй вместе с нами!</h3>
        <div class="d-flex mt-4">
        <div class="buttons ">
        <a href="log.php" class="btn btn-light ">Зарегистрироваться</a>
        </div>
                                        

         
         <div class="buttons ml-4 ">
        <a href="log2.php" class="btn btn-light ">Войти</a>
        </div>
        </div>                                

         </div>
    		
    		</div>
        <div class="col-7" ></div>
    		
    	
		
    </div>
    	
    
    
    
    <section id="features" class="services-area pt-120" style="height: 1000px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                       
                        <h3 class="title">Получай призы и бонусы<span> Просто гуляя с друзьями или бегая по парку</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="items/1.png" style="opacity: 0.1; height: 100px; width: 100px;"alt="shape">
                            <img class="shape-1" src="items/1.png" alt="">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">ТУРНИРЫ</a></h4>
                            <p class="text">Система лиг даст возможность каждому 
пользователю продвигаться к топу, повышать свой уровень и получать призы .</p>
                            </p>
                            
                        </div>
                    </div> <!-- single services -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="items/2.png" style="opacity: 0.1; height: 100px; width: 100px;"alt="shape">
                            <img class="shape-1" src="items/2.png" alt="">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">КООПЕРАТИВ</a></h4>
                            <p class="text">Приглашайте друзей и единомышленников, 
чтобы получать бонусы, а также получить доступ к совместным заданиям </p>
                            
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="items/3.png" style="opacity: 0.1; height: 100px; width: 100px;"alt="shape">
                            <img class="shape-1" src="items/3.png" alt="">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">НАГРАДЫ</a></h4>
                            <p class="text">Выполняйте миссии или играйте в лигах,
турнирах и сообществах, чтобы выиграть призы.</p>
                            
                        </div>
                    </div> <!-- single services -->
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    

    
   
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js4/index.js"></script>  
  <script src="assets2/jquery-3.5.1-min.js"></script>
    <script src="assets2/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets2/popper.min.js"></script>
    <script src="assets2/bootstrap-4.5.0.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="assets2/plugins.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="assets2/waypoints.min.js"></script>
    <script src="assets2/jquery.counterup.min.js"></script>
    

    
    <!--====== Scrolling Nav js ======-->
    <script src="assets2/jquery.easing.min.js"></script>
    <script src="assets2/scrolling-nav.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets2/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="assets2/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets2/main.js"></script>
 <script type="text/javascript">





 </script>
  </body>
</html>