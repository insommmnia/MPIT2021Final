<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Личный кабинет</title>
    <meta charset="UTF-8">
    
    <link rel="shortcut icon" href="icons/logo.png" type="image/png">
    
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
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
      input {

         font-family: 'Open Sans', sans-serif;
      }
      label {

         font-family: 'Open Sans', sans-serif;
      }

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
<?php 
$con = mysqli_connect("127.0.0.1","root","","mpit2021fin");





$text_query5 =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query5 = mysqli_query($con, $text_query5);
$steps = $query5->fetch_assoc();


$teamtotalpercent = 0;
$taskaccept = 0;

$text_query6 =  "SELECT * FROM users WHERE idfriend = '{$_SESSION['id']}'";
$query6 = mysqli_query($con, $text_query6);
                                                                                                            
$result61 = $query6->fetch_assoc();
$result62 = $query6->fetch_assoc();
                                                            
$usertotal = 0;

            
$text_query7 =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query7 = mysqli_query($con, $text_query7);   
$result7 = $query7->fetch_assoc();
             
$usertotal = $result7["Monday"]+$result7["Tuesday"]+$result7["Wednesday"]+$result7["Thursday"]+$result7["Friday"]+$result7["Saturday"]+$result7["Sunday"] + $usertotal; 
          
           
           
                                                                  
                                                    
                                                            
                                                        
                                                 

?>
<body style="background-color: #F2F7FF">
 <header class="main-header  " style="height: 90px; " id="" >
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
            
            
            
            
           <?php if ($_SESSION['id'] != "") {
                                  
           
            $text_query = "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
            
            $query = mysqli_query($con, $text_query);
            
            $result = $query->fetch_assoc();

            $text_query2 =  "SELECT * FROM teams WHERE id = '{$result["idteam"]}'";
$query2 = mysqli_query($con, $text_query2);
$result2 = $query2->fetch_assoc();
            ?>
            <li class='scroll-to-section mt-3'><a href='sub.php'>Подписки</a></li>
               <li class='scroll-to-section mt-3'><a href='profile.php'>Личный кабинет</a></li>

              
                                
               <li class='scroll-to-section mt-1  '><img <?php echo "src='".$result["img"]."'"; ?> class="" style="height: 50px; width: 50px; margin-left: 10px; border-radius: 100%;"></li>
               
               
            <?php }
              else {
?>
            <li>
              <a href='log.php'>Регистрация</a>
            </li>
            <li>
              <a href='log2.php'>Вход</a>
            </li>
            

        <?php } ?>

         
          
           
            

     
            
          </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>

<input type="hidden" name="" class="ursteps" <?php echo "value='".$usertotal."'" ?>> 
<section class="section">

                    <div class="row">
                        
                        <div class="col-md-12 ">

                            <div class="card " style="background-color: transparent !important;">
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2" >
                                            <div class="nav flex-column nav-pills col-1" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical" style="position: fixed;">
                                                <div class="card-header" style="background-color: transparent !important;">
                                    <h6 class="card-title">Панель управления</h6>
                                </div>
                                                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                    aria-selected="false" >Профиль</a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                    aria-selected="false" >Задания</a>
                                                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                    aria-selected="false" >Маркет <p style="color: orange;"><?php echo $result["points"]; ?> баллов</p></a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false" >Настройки</a>
                                                    <a class="nav-link" href="exit.php" >Выйти</a>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">
                                                    <div class="sec1 row col-12" style="display: block; transition: 0.8s; opacity: 1;">      
  <div class="col-12 ml-auto d-flex " style="background-color: ; height: 500px; margin-left: auto; margin-top: 60px;">
    <div class="col-3" style="background-color: none; height: 500px; " >
      <div class="col-12 " style="background-color: none; height: 500px;">
        <div class="col-12 " style="background-color:  none; height: 300px;">
          <div class="col-10  mx-auto" style=" <?php echo "background-image: url(".$result['img'].");" ?> background-size: 100% 100%; height: 300px;">
            
          </div>
       
      </div>
        <div class="col-12" style="background-color: none; height: 100px;">
        <div class="col-12 col-lg-12">
                        <div class="col-md-12 mt-1"  >
                            <div class="col-11 col-lg-10 col-md-7  mx-auto">
                                <div class="card">
                                    <div class="card-body mx-auto px-6 py-4-5">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <h6 class="text-muted font-semibold"><?php echo $result["name"]; echo " "; echo $result["surname"]; ?></h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $result["age"]; ?> лет</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        
                    </div>
      </div>
      </div>
    </div>
    <div class="col-9 col-lg-9" style="background-color: none; height: 1000px; " >
      <div class="row">
        <div class="col-7" style="height: 600px; background-color: ;">
          <div class="row">
            <div class="col-12 mx-auto " style="height: 500px;">
                <div class="card">
                    <div class="card-header"  >
                        <h4 class="card-title">Шаги за неделю</h4>
                     </div>
                    <div class="card-body" >
                        <canvas id="bar" height="160" ></canvas>
                    </div>
                </div>
              </div>
                        
            </div>
        </div>
        <div class="col-5" style="height: 400px; background-color: none;">
          <div class="col-12 col-lg-12">
                        <div class=" col-md-12 mt-2"  >
                            <div class="col-11 col-lg-7 col-md-6">
                                <div class="card">
                                    <div class="card-body px-2 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Расстояние</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo round($result7[date('l')] * 0.8 / 1000, 1); ?> км</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-lg-7 col-md-6">
                                <div class="card">
                                    <div class="card-body px-2 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Ккалорий</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo round($result7[date('l')] * 0.05); ?> </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-lg-7 col-md-6">
                                <div class="card">
                                    <div class="card-body px-2 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Время активности</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo round($result7[date('l')] / 2 * 1 / 60); ?> мин</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
        </div>
      </div>
      
    </div>
  </div>
  



<div class="row 
">
  
  <div class="col-12 
   ml-auto d-flex " style="background-color: none; height: 500px; margin-top: 50px; ">
    <div class="row col-12  " style=" margin-left: 10px;">
                            <div class="col-lg-11 px-6   " style="width: 1300px;">
                                <div class="card col-lg-11 " style="width: 1280px;">
                                    <div class="card-header">
                                        <h4>Годовая активность</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
  </div>
      
    </div>
</div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="sec2 row " style="display: block; transition: 0.8s; opacity: 1;">   
<?php if ($result["idteam"] == "0") { ?>
  <div class="col-12 mx-auto" style="background-color: ; text-align: center; height: 500px;  margin-top: 50px;">
    <div>
       <h3>Еженедельные задания</h3>
      
    </div>
   <hr style="width: 200px; margin-left: auto;margin-right: auto; margin-top: 10px;"> 
    <div class="col-md-10 col-12 mx-auto" style="margin-top: 60px;">
                           <div class="card">
                               <div class="card-header mt-4">
                                   <h4 class="card-title ">
                                        Еженедельное задание
                                   </h4>
                                   <p style="margin-top: 50px;">
                                            Новое задание! В течение недели вам будут даваться дневные цели. И в конце недели вы получите 500 бонусов.
                                    </p>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       
                                        <!-- button trigger for  Vertically Centered modal -->
                                       <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Учавствовать
                                       </button>
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter"tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalCenterTitle">Пригласить 2 друзей
                                                       </h5>
                                                       <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <p>
                                                            Проходите с друзьями еженедельные задания, чтобы получить 500 бонусов на команду
                                                            (Кол-во бонусов распределяется в зависимости от того, сколько шагов сделал каждый, чтобы выполнить задание)
                                                       </p>
                                                   </div>
                                                   <div class="col-12 col-xl-12">

                                <div class="card">
                                    
                                    <div class="card-header">
                                        <h4>Ваши друзья</h4>
                                    </div>
                                        
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($result61["name"] != "") { ?>
                                                       
        
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result61["name"];
                                                                    echo " ";
                                                                    echo $result61["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite1 btn btn-primary ml-1"
                                                            >
                                                           
                                                            <input type="hidden" name="" class="inviteid1" <?php echo "value='".$result61["id"]."'" ?>> 
                                                             <p><span id="inp1">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                    <?php  }  ?>

                                                    <?php if ($result62["name"] != "") { ?>
                                                     <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result62["name"];
                                                                    echo " ";
                                                                    echo $result62["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite2 btn btn-primary ml-1"
                                                            >
                                                            
                                                            <input type="hidden" name="" class="inviteid2" <?php echo "value='".$result62["id"]."'" ?>> 
                                                            <p><span id="inp2">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                     <?php } ?>
                                                

                                                       
                                                
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="col-9  mx-auto">
                                 <form  id="signup-form"  class="signup-form mx-auto"> 
                        <h4 class="form-title">Найти друзей по коду</h4>
                        
                        
                        <div class="form-group">
                                        
                                        <input type="text" class="form-control friendcode " id="basicInput"
                                            placeholder="Код друга">
                                    </div>
                        
                        
                        <button type="button" style="text-align: center; height: 40px;" class="btn friendclick btn-primary ml-1"
                                                            >
                                                             <p style="margin-top: 0px;">Добавить</p>
                                                            
                                                       </button>
                    </form>
                    </div>
                    </div>
                            </div>

                                                   <div class="modal-footer">
                                                       
                                                       <button type="button" style=" height: 40px;"  class="btn ready btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                             <input type="hidden" name="" class="uridinvite" <?php echo "value='".$result["id"]."'" ?>>
                                                            
                                                            <p style="margin-top: 0px;" >Готово</p>
                                                       </button>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       
  
  


      </div>

       
       <?php } ?>
       </div>
       <div class="col-12 mx-auto" style="background-color: ; text-align: center; height: 500px;  margin-top: 50px;">
    <div>
       <h3>Задания от спонсоров</h3>
      
    </div>
   <hr style="width: 200px; margin-left: auto;margin-right: auto; margin-top: 10px;"> 
    <div class="col-md-10 col-12 mx-auto" style="margin-top: 60px;">
                           <div class="card">
                               <div class="card-header mt-4">
                                   <h4 class="card-title ">
                                        Месячный квест
                                   </h4>
                                   <p style="margin-top: 50px;">
                                            Новый розыгрыш бонусов от dilivery club. В течении месяца вы будете соревноваться с другими командами.
                                            И топ 20 команд получит спецпризы от dilivery club
                                    </p>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       <div class="bg-dar"></div>
                                        <!-- button trigger for  Vertically Centered modal -->
                                       <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Учавствовать
                                       </button>
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter"tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h5 class="modal-title" id="exampleModalCenterTitle">Пригласить 2 друзей
                                                       </h5>
                                                       <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <p>
                                                            Проходите с друзьями еженедельные задания, чтобы получить 500 бонусов на команду
                                                            (Кол-во бонусов распределяется в зависимости от того, сколько шагов сделал каждый, чтобы выполнить задание)
                                                       </p>
                                                   </div>
                                                   <div class="col-12 col-xl-12">

                                <div class="card">
                                    
                                    <div class="card-header">
                                        <h4>Ваши друзья</h4>
                                    </div>
                                        
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($result61["name"] != "") { ?>
                                                       
        
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result61["name"];
                                                                    echo " ";
                                                                    echo $result61["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite1 btn btn-primary ml-1"
                                                            >
                                                           
                                                            <input type="hidden" name="" class="inviteid1" <?php echo "value='".$result61["id"]."'" ?>> 
                                                             <p><span id="inp1">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                    <?php  }  ?>

                                                    <?php if ($result62["name"] != "") { ?>
                                                     <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php 
                                                                    echo $result62["name"];
                                                                    echo " ";
                                                                    echo $result62["surname"];

                                                                 ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <button type="button" style="text-align: center; height: 40px;" class=" invite2 btn btn-primary ml-1"
                                                            >
                                                            
                                                            <input type="hidden" name="" class="inviteid2" <?php echo "value='".$result62["id"]."'" ?>> 
                                                            <p><span id="inp2">Пригласить</span></p>
                                                       </button>
                                                        </td>
                                                    </tr>
                                                     <?php } ?>
                                                

                                                       
                                                
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="col-9  mx-auto">
                                 <form  id="signup-form"  class="signup-form mx-auto"> 
                        <h4 class="form-title">Найти друзей по коду</h4>
                        
                        
                        <div class="form-group">
                                        
                                        <input type="text" class="form-control friendcode " id="basicInput"
                                            placeholder="Код друга">
                                    </div>
                        
                        
                        <button type="button" style="text-align: center; height: 40px;" class="btn friendclick btn-primary ml-1"
                                                            >
                                                             <p style="margin-top: 0px;">Добавить</p>
                                                            
                                                       </button>
                    </form>
                    </div>
                    </div>
                            </div>

                                                   <div class="modal-footer">
                                                       
                                                       <button type="button" style=" height: 40px;"  class="btn ready btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                             <input type="hidden" name="" class="uridinvite" <?php echo "value='".$result["id"]."'" ?>>
                                                            
                                                            <p style="margin-top: 0px;" >Готово</p>
                                                       </button>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       
  
  


      </div>

       
       
       </div>
       
         <?php

                                                
        
            
            if ($result["idteam"] != "0") {
            $text_query3 =  "SELECT * FROM users WHERE idteam = '{$result["idteam"]}'";

            $query3 = mysqli_query($con, $text_query3);

            $taskaccept = 1;

            $teamtotal = 0;


            for($i=0;$i<$query3->num_rows;$i++){
                $result4 = $query3->fetch_assoc();
                
                $teamtotal = $result4["steps"] + $teamtotal; 

            
            }

            
                    $teamtotalpercent = ($teamtotal * 100) / $result2["task1"];
                    
                    
                   if ($result["steps"] != "0") {
                    $mate1 = 1;
                    $mate2 = 1;
                    $mate3 = 1;
                    $mate3 =  round(($result62["steps"] * 100) / $result2["task1"]);
                     
                      $mate2 =  round(($result61["steps"] * 100) / $result2["task1"]);
                      
                      $mate1 =  round(($result["steps"] * 100) / $result2["task1"]);

                      if ($result2["total"] >= $result2["task1"]) {
                      $bmate1 = (1000 / 100) * $mate1;
                      $bmate2 = (1000 / 100) * $mate2;
                      $bmate3 = (1000 / 100) * $mate3;

                      $text_zaprosa_vstavit = "UPDATE users SET points = '{$bmate1}' WHERE id = '{$result["id"]}'";
                      $query_insert = mysqli_query($con, $text_zaprosa_vstavit);
                      $text_zaprosa_vstavit2 = "UPDATE users SET points = '{$bmate2}' WHERE id = '{$result61["id"]}'";
                      $query_insert2 = mysqli_query($con, $text_zaprosa_vstavit2);
                      $text_zaprosa_vstavit3 = "UPDATE users SET points = '{$bmate3}' WHERE id = '{$result62["id"]}'";
                      $query_insert3 = mysqli_query($con, $text_zaprosa_vstavit3);
                    }
                    
                   }
                      
                    
                                         
                                                
                                                
        ?>
        <input type="hidden" name="" class="totalsteps" <?php echo "value='".$teamtotal."'" ?>> 
       <div class="col-12 " style="height: 500px;">
    <div class="col-lg-10 mx-auto">

                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom">
                                    <h3 class="d-flex">
                                        Прогресс команды 
                                    </h3>
                                    <div class="col-12  d-flex mx-auto" style="margin-top: 40px; height: 60%;">
                                        <div class="col-12  mx-auto d-flex">
                                         <div class=" col-4  " style="margin-left: 10px;">
                                        <div class="d-flex  " style=" margin-left: 20px;">
                                          <div class=" col-12 mx-auto d-flex">
                                            <img <?php echo "src='".$result["img"]."'" ?>  class="w-25" alt="" srcset="">
                                            <div style="margin-left: 20px;">
                                             <h4 class="ml-4" style="margin-top: 5px;  ">
                                                <?php 
                                                    echo $result["name"];
                                                    echo " ";
                                                    echo $result["surname"];

                                                ?>

                                            </h4>
                                            <p class="" style="margin-top: 5px; margin-left: 0px; ">
                                                <?php 
                                                    echo $result["steps"], " шагов";
                                                    echo " /";
                                                    echo " ";
                                                    echo $mate1, "%";
                                                    if ($result2["total"] >= $result2["task1"]) {
                                                      echo " /";
                                                      echo " ";
                                                      echo $bmate1;
                                                      echo " ";
                                                      echo " баллов";
                                                    }
                                                    

                                                ?>
                                            </p>
                                            
                                            </div>
                                        </div>

                                       </div>
                                        </div>



                                        <div class=" col-4 " style="margin-left: 0px;">
                                        <div class="d-flex  " style=" margin-left: 20px;">
                                          <div class=" col-12   d-flex">
                                            <img class="w-25" <?php echo "src='".$result61["img"]."'" ?>  > 
                                            <div style="margin-left: 20px;">
                                             <h4 class="ml-4" style="margin-top: 5px;  ">
                                                <?php 
                                                    echo $result61["name"];
                                                    echo " ";
                                                    echo $result61["surname"];

                                                ?>

                                            </h4>
                                            <p class="" style="margin-top: 5px; margin-left: 0px; ">
                                                <?php 
                                                    echo $result61["steps"], " шагов";
                                                    echo " /";
                                                    echo " ";
                                                    echo $mate2, "%";
                                                   if ($result2["total"] >= $result2["task1"]) {
                                                      echo " /";
                                                      echo " ";
                                                      echo $bmate2;
                                                      echo " ";
                                                      echo " баллов";
                                                    }

                                                    

                                                ?>
                                            </p>
                                            
                                            </div>
                                        </div>

                                       </div>

                                       
                                        </div>
                                         <div class=" col-4 " style="margin-left: 0px;">
                                        <div class="d-flex  " style=" margin-left: 20px;">
                                          <div class=" col-12 d-flex">
                                            <img <?php echo "src='".$result62["img"]."'" ?>  class="w-25" alt="" srcset="">
                                            <div style="margin-left: 20px;">
                                             <h4 class="ml-4" style="margin-top: 5px;  ">
                                                <?php 
                                                    echo $result62["name"];
                                                    echo " ";
                                                    echo $result62["surname"];

                                                ?>

                                            </h4>
                                            <p class="" style="margin-top: 5px; margin-left: 0px; ">
                                                <?php 
                                                    echo $result62["steps"], " шагов";
                                                    echo " /";
                                                    echo " ";
                                                    echo $mate3, "%";
                                                    if ($result2["total"] >= $result2["task1"]) {
                                                      echo " /";
                                                      echo " ";
                                                      echo $bmate3;
                                                      echo " ";
                                                      echo " баллов";
                                                    }
                                                    

                                                ?>
                                            </p>
                                           
                                            </div>
                                        </div>

                                       </div>

                                       
                                        </div>
                                      </div>                                  </div>
                                </div>
                                <div class="card-body px-0 py-1 ml-4" style="margin-left: 15px; margin-top: 80px;">
                                    <table class="table table-borderless ml-4">
                                        
                                    
                                        <tr>

                                            <td class="col-8 d-flex" style="">
                                              
                                              <div class="checkbox checkbox-shadow">
                                                <?php 
                                                if ($result2["total"] >= $result2["task1"]) {
                                                      
                                                   
                                                    
                                              ?>
                                                        <input type="checkbox" class="form-check-input" checked disabled style="background-color: green" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                              <?php } ?>
                                                    </div>
                                                    <p> Сделать <?php echo $result2["task1"]; ?> шагов</p>
                                            </td>

                                            <td class="col-6">
                                              <?php 
                                                if ($result2["total"] < $result2["task1"]) {
                                                      
                                                   
                                                    
                                              ?>
                                                <div class="progress progress-danger">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php echo $teamtotalpercent;?>%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                              <?php } elseif ($result2["total"] >= $result2["task1"]) {
                                                # code...
                                            ?>
                                                <div class="col-4 mx-auto">
                                                <h5 class="mx-auto">Выполнено</h5>
                                                </div>
                                              <?php } ?>
                                            </td>

                                            <td class="col-3 text-center"><?php 
                                            if ($result2["total"] <= $result2["task1"]) {
                                                       echo $teamtotal;
                                                       echo " /";
                                                   
                                              } else {

                                                 echo $result2["task1"];
                                                 echo " /"; 
                                              }    
                                              ?>

                                            


                                            <?php echo $result2["task1"]; ?></td>

                                        </tr>
                                        
                                        
                                    </table>
                                </div>

                                 <div class="card widget-todo mx-auto col-12 d-flex">
                                     <div class="col-5 mx-auto  card-header" style="text-align: center;">
                                     <h4> Награда: 1000 баллов</h4>
                                    </div>
                                 </div>
                            </div>

                        </div>
                        <?php } ?>
       </div>



                                                </div>
























                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                    aria-labelledby="v-pills-messages-tab">
                                                   <div class="col-11 " style="height: 1500px;">
                                                    <div class="col-2 mx-auto" style="text-align: center;">
                                                      <h3 class="mx-auto">Магазин</h3>
                                                      <h4 class="mx-auto" style="margin-top: 80px;">Игровые товары</h4>
                                                      
                                                    </div>
                                                    
                                                     <div class="col-12  " style="height: 1000px; margin-top: 120px;">

                                                       <div class="col-12  d-flex" style="height: 500px;">
                                                         <div class="col-2 " style="height: 500px;">
                                                           <div class="col-8 mx-auto " style="height: 150px; background-image: url(items/dota.png); background-size: 100% 100%;"></div>
                                                         </div>
                                                         <div class="col-10 " style="height: 400px;">
                                                           <div class="col-12 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/hook.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Dragonclaw Hook</h5>
                                                                   <h6>Autographed</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 200000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/d1.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Набор Gunslinger</h5>
                                                                   <h6>Cursed</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 150000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/d2.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Набор The Alpine Stalker</h5>
                                                                   <h6>Cursed</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 90000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/d3.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Fiery Soul of the Slayer</h5>
                                                                   <h6>Heroic</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 140000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>

                                                         </div>
                                                         <div class="col-12" style="height: 100px;">
                                                           <div class="col-3 mx-auto " style="height: 100px;">
                                                             <div class="col-12 mx-auto mt-4" style="height: 100px; margin-top: 50px;">
                                                                <div class="buttons mx-auto col-8 mt-4" >
                                                                      <button type="button" class="btn btn-outline-primary block" style="margin-top: 50px;">
                                            Посмотреть больше
                                       </button>
                                                                      </div>
                                                             </div>
                                                           </div>
                                                         </div>
                                                           </div>
                                                       </div>
                                                       
                                                       <div class="col-12  d-flex" style="height: 500px; margin-top: 80px;">
                                                         <div class="col-2 " style="height: 500px;">
                                                           <div class="col-8 mx-auto " style="height: 150px; background-image: url(items/csgo.png); background-size: 100% 100%;"></div>
                                                         </div>
                                                         <div class="col-10 " style="height: 400px;">
                                                           <div class="col-12 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/c1.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>M4A1-S | Поток информации</h5>
                                                                   <h6>Прямо с завода</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 190000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/c2.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>StatTrak™ AK-47 | Вулкан</h5>
                                                                   <h6>Прямо с завода</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 210000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/c3.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Glock-18 | Градиент</h5>
                                                                   <h6>Прямо с завода</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 130000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/c4.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>StatTrak™ USP-S | The Traitor</h5>
                                                                   <h6>Прямо с завода</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 120000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>

                                                         </div>
                                                         <div class="col-12" style="height: 100px;">
                                                           <div class="col-3 mx-auto " style="height: 100px;">
                                                             <div class="col-12 mx-auto mt-4" style="height: 100px; margin-top: 50px;">
                                                                <div class="buttons mx-auto col-8 mt-4" >
                                                                      <button type="button" class="btn btn-outline-primary block" style="margin-top: 50px;">
                                            Посмотреть больше
                                       </button>
                                                                      </div>
                                                             </div>
                                                           </div>
                                                         </div>
                                                           </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                   <div class="col-12 mx-auto" style="margin-top: 80px;">
                                                         <div class="col-6 mx-auto" style="text-align: center; ">
                                                           <h4 class="mx-auto" style="margin-top: 40px;">Остальные товары</h4>
                                                         </div>
                                                       </div>
                                                
                                                <div class="col-11 " style="height: 600px;">
                                                    
                                                     <div class="col-12  " style="height: 600px; margin-top: 120px;">

                                                       <div class="col-12  d-flex" style="height: 500px;">
                                                         <div class="col-2 " style="height: 500px;">
                                                           <div class="col-8 mx-auto " style="height: 150px; background-image: url(items/dil.jpg); background-size: 100% 100%;"></div>
                                                         </div>
                                                         <div class="col-10 " style="height: 400px;">
                                                           <div class="col-12 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/dil1.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Скидка 20% </h5>
                                                                   <h6>На один заказ</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 8000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-11 mx-auto d-flex" style="height: 400px;">
                                                             <div class="col-12" style="background-color: white; height: 400px; border-radius: 10px;">
                                                               <div class="col-11 mx-auto " style="height: 200px; background-image: url(items/dil2.png);
                                                               background-size: 100% 100%; border-radius: 10%;"></div>
                                                               <div class="col-12 mt-2" style="height: 180px; ">
                                                                 <div class="col-12" style="height: 80px; text-align: center;">
                                                                   <h5>Скидка 10%</h5>
                                                                   <h6>На один заказ</h6>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 30px; text-align: center;">
                                                                   <p>Цена: 5000 баллов</p>
                                                                 </div>
                                                                 <div class="col-12  mt-2" style="height: 70px;">
                                                                   <div class="col-8 mx-auto mt-2" style="height: 70px;">
                                                                    <div class="col-6 mx-auto mt-4" >
                                                                   <div class="buttons mx-auto">
                                                                      <a href="#" class="btn btn-primary mx-auto">Купить</a>
                                                                      </div>
                                        
                                                                  </div>
                                                                 </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </div>
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             
                                                           </div>
                                                            <div class="col-3 mx-auto d-flex" style="height: 400px;">
                                                             
                                                           </div>

                                                         </div>
                                                         <div class="col-12" style="height: 100px;">
                                                           <div class="col-3 mx-auto " style="height: 100px;">
                                                             <div class="col-12 mx-auto mt-4" style="height: 100px; margin-top: 50px;">
                                                                <div class="buttons mx-auto col-8 mt-4" >
                                                                      
                                                                      </div>
                                                             </div>
                                                           </div>
                                                         </div>
                                                           </div>
                                                       </div>
                                                       
                                                       
                                                     
                                                   </div>
                                                  </div>
                                                  </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                    aria-labelledby="v-pills-settings-tab">
                                                    <div class="col-11 " style="height: 900px;">
                                                      <div class=" col-8 mx-auto" style="height: 900px;">
                                                        <div class=" col-10 mx-auto" style="height: 900px; background-color: white; border-radius: 10px;">
                                                          
                                                          <div class="col-12" style="height: 200px;">
                                                            <div class="col-4 mx-auto " style="height: 200px; <?php echo "background-image: url(".$result["img"].");"; ?> background-size: 100% 100%; border-radius: 100%"></div>
                                                          </div>
                                                          <div class="col-12 mt-4 " style="height: 500px;">
                                                            <div class="col-7 mx-auto " style="height: 500px;">
                                                            <form method="POST" id="signup-form" action="edit.php" enctype="multipart/form-data" class="signup-form">
                                                              <div class="form-group">
                                                                  <label for="roundText">Имя</label>
                                                                  <input type="text" id="roundText" name="name" class="form-control round"
                                                                      <?php echo "value='".$result["name"]."'"; ?>>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="roundText">Фамиилия</label>
                                                                  <input type="text" id="roundText" name="surname" class="form-control round"
                                                                      <?php echo "value='".$result["surname"]."'"; ?>>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="roundText">Возраст</label>
                                                                  <input type="text" id="roundText" name="age" class="form-control round"
                                                                      <?php echo "value='".$result["age"]."'"; ?>>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="roundText">Почта</label>
                                                                  <input type="text" id="roundText" name="mail" class="form-control round"
                                                                      <?php echo "value='".$result["mail"]."'"; ?>>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="roundText">Пароль</label>
                                                                  <input type="text" id="roundText" name="password" class="form-control round"
                                                                      <?php echo "value='".$result["password"]."'"; ?>>
                                                              </div>
                                                              
                                                              <div class="mb-3">
                                                                  <label for="formFile" class="form-label">Аватар</label>
                                                                  <input class="form-control" name="img" type="file" id="formFile" <?php echo "value='".$result["img"]."'"; ?>>
                                                              </div>
                                                              <div class="col-2 mx-auto mt-4">
                                                              <button type="submit" style=" height: 40px; margin-top: 20px;"  class="btn mx-auto ready btn-primary ml-1">
                                                            
                                                            
                                                            <p style="margin-top: 0px;" >Сохранить изменения</p>
                                                       </button>
                                                       </form>
                                                       </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


    
       
    
<div class="steps1"  data-attr="<?=$result7["Monday"];?>"></div>
<div class="steps2"  data-attr="<?=$result7["Tuesday"];?>"></div>
<div class="steps3"  data-attr="<?=$result7["Wednesday"];?>"></div>
<div class="steps4"  data-attr="<?=$result7["Thursday"];?>"></div>
<div class="steps5"  data-attr="<?=$result7["Friday"];?>"></div>
<div class="steps6"  data-attr="<?=$result7["Saturday"];?>"></div>
<div class="steps7"  data-attr="<?=$result7["Sunday"];?>"></div>
<div class="stepsall"  data-attr="<?=$result["steps"];?>"></div>
        
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/pages/ui-chartjs.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

<script type="text/javascript">
    
</script>
<script>

$(document).ready(function(){
       

            
                

        
    });
    $(document).ready(function(){
        $('button.edit').on('click', function(){

            var stepsValue = $('input.steps').val();
            
            console.log(stepsValue);

            $.ajax({

                method: "POST",
                url: "step.php",
                data: { 

                    steps: stepsValue
                }
            })
                .done(function(){

                    var stValue = $('input.ursteps').val();
                    var st2Value = $('input.totalsteps').val();
            
                    console.log(stValue);

                    $.ajax({

                        method: "POST",
                        url: "steptotal.php",
                        data: { 

                          totalst: stValue,
                          totalst2: st2Value

                        }
                    })

                    .done(function(){

                      location.reload();

                    });
                        
                });

        });
    });
    $(document).ready(function(){
        $('button.friendclick').on('click', function(){

            var friendValue = $('input.friendcode').val();
            
            console.log(friendValue);

            $.ajax({

                method: "POST",
                url: "friend.php",
                data: { 

                    code: friendValue
                }
            })
                .done(function(){

                    location.reload();

                });

        });
    });
  
    document.getElementById("inp1").innerHTML = "Пригласить";
    $(document).ready(function(){
        $('button.invite1').on('click', function(){

            var inidValue = $('input.inviteid1').val();
             document.getElementById("inp1").innerHTML = "Приглашен";
            
            console.log(inidValue);

            $.ajax({

                method: "POST",
                url: "team.php",
                data: { 

                    inviteid: inidValue

                }
            })

            .done(function(){

                   console.log(inidValue);
                });
                

        });
    });

    $(document).ready(function(){
        $('button.invite2').on('click', function(){

            var inidValue = $('input.inviteid2').val();
            document.getElementById("inp2").innerHTML = "Приглашен";
            console.log(inidValue);

            $.ajax({

                method: "POST",
                url: "team.php",
                data: { 

                    inviteid: inidValue

                }
            })

            .done(function(){

                   console.log(inidValue);
                });
                

        });
    });
     $(document).ready(function(){
        $('button.ready').on('click', function(){

            var inidValue = $('input.uridinvite').val();
            
            console.log(inidValue);

            $.ajax({

                method: "POST",
                url: "teamtask.php",
                data: { 

                    inviteid: inidValue

                }
            })

            .done(function(){

                   location.reload();
                });
                

        });
    });
        
  
  
    
    
</script>
</body>

</html>