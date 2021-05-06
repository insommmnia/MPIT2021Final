<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style type="text/css">
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
    top: 0px;
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
p {
    color: #000 !important;
}
    </style>
</head>
<?php 
$con = mysqli_connect("127.0.0.1","root","","mpit2021fin");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
    
$result = $query->fetch_assoc();
$text_query2 =  "SELECT * FROM teams WHERE id = '{$result["idteam"]}'";
$query2 = mysqli_query($con, $text_query2);
$result2 = $query2->fetch_assoc();

$text_query5 =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query5 = mysqli_query($con, $text_query5);
$steps = $query5->fetch_assoc();



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

  <header class="main-header  " style="height: 80px; " id="" >
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-5">
        <a class="navbar-brand" href="/mojo">
                          <h3 style="color:#383d41;">Work-IT</h3>
                        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar icon-bar-1"></span>
                        <span class="icon-bar icon-bar-2"></span>
                        <span class="icon-bar icon-bar-3"></span>
                        
                    </button>
        <div class="collapse navbar-collapse " id="mainMenu">
            <div class="col-6"></div>
            <div class=" col-6 ">
          <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="#home" class="">Главная</a>
            </li>
            <li>
              <a href="#about">О нас</a>
            </li>
            
            <li>
              <a href="#testimony">Подписки</a>
            </li>
           
          
            <li>
              <a href='log.php'>Регистрация</a>
            </li>
            <li>
              <a href='log2.php'>Вход</a>
            </li>
            

     
            
          </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>

  <div class="col-2" style="height: 400px; position: fixed; background-color: white;">
    <div class="bg-danger col-10 mx-auto" style="height: 400px; text-align: center;">
      <h5 class="card-title">Панель управления</h5>
      <div class="bg-dark col-12 mx-auto" style="height: 80px; text-align: center;"> </div>
      <div class="bg-dark col-12 mx-auto" style="height: 80px; text-align: center; margin-top: 20px;"> </div>
      <div class="bg-dark col-12 mx-auto" style="height: 80px; text-align: center; margin-top: 20px;"> </div>
    </div>
      </div>
   
  <div class="sec1 row" style="display: block; transition: 0.8s; opacity: 1;">      
  <div class="col-10 ml-auto d-flex " style="background-color: ; height: 500px; margin-left: auto; margin-top: 60px;">
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
    <div class="col-9" style="background-color: none; height: 1000px; " >
      <div class="row">
        <div class="col-7" style="height: 500px; background-color: ;">
          <div class="row">
            <div class="col-12 mx-auto " style="height: 400px;">
                <div class="card">
                    <div class="card-header"  >
                        <h4 class="card-title">Шаги за неделю</h4>
                     </div>
                    <div class="card-body" >
                        <canvas id="bar" height="50" width="100"></canvas>
                    </div>
                </div>
              </div>
                        
            </div>
        </div>
        <div class="col-5" style="height: 500px; background-color: none;">
          <div class="col-12 col-lg-12">
                        <div class=" col-md-12 mt-2"  >
                            <div class="col-11 col-lg-7 col-md-7">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
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
                            <div class="col-11 col-lg-7 col-md-7">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
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
                            <div class="col-11 col-lg-7 col-md-7">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
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
  



<div class="row">
  
  <div class="col-10  ml-auto d-flex " style="background-color: none; height: 500px; margin-top: 50px; margin-left: auto;">
    <div class="row col-11  " style="margin-left: 20px; width: 1380px;">
                            <div class="col-12  ">
                                <div class="card col-lg-12">
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
<div class="sec2 row bg-danger" style="display: none; transition: 0.8s; opacity: 0;">   

  <div class="col-10 ml-auto" style="background-color: red; text-align: center; height: 500px; margin-left: auto; margin-top: 80px;">
    <div>
       <h3>Еженедельные задания</h3>
       <hr style="width: 200px; margin-left: auto;margin-right: auto;"> 
    </div>
   
    <div class="col-md-8 col-12 mx-auto">
                           <div class="card">
                               <div class="card-header mt-4">
                                   <h4 class="card-title ">
                                        Еженедельное задание
                                   </h4>
                                   <p style="margin-top: 50px;">
                                            Новое задание! В течение недели вам будут даваться новые цели. И в конце недели вы получите 500 бонусов
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
       <div class="col-md-4 col-5 mx-auto" style="margin-top: 30px;">
                           <div class="card">
                               <div class="card-header " >
                                   <h4 class="card-title">
                                        Хотите получать больше заданий?
                                   </h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       <p>
                                            Купите премиум подписку! С ней вам будет доступно больше заданий.
                                       </p>
                                        <!-- button trigger for  Vertically Centered modal -->
                                       <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Приобрести
                                       </button>
                                        <!-- Vertically Centered modal Modal -->
                                        
                                   </div>
                               </div>
                           </div>
                       
  
  


      </div>

</div>
</div>
<input type="" name="" class="ursteps" <?php echo "value='".$usertotal."'" ?>> 
<?php if ($result["idteam"] == "0") { ?>



<?php } ?>
    <div id="app">
        
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Шаги за неделю</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
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
            
                                                
                                                
                                                
        ?>
       
    <div class="col-lg-4 mx-auto">

                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom">
                                    <h4 class="d-flex">
                                        Прогресс команды 
                                    </h4>
                                    <div class="col-12  d-flex mx-auto" style="margin-top: 20px; height: 60%;">
                                        <div class="col-12  mx-auto d-flex">
                                        <div class=" col-4 " style="margin-left: 0px;">
                                        <div class="avatar  " style="" style="">
                                            <img src="assets/images/faces/1.jpg" alt="" srcset="">
                                            <p class="" style="margin-top: 5px; margin-left: 3px; font-size: 14px;">
                                                <?php 
                                                    echo $result["name"];
                                                    echo " ";
                                                    echo $result["surname"];

                                                ?>
                                            </p>
                                            


                                        </div>
                                        <p class="" style="margin-top: 5px; margin-left: 0px;">
                                                <?php 
                                                    echo $result["steps"], " шагов";
                                                    

                                                ?>
                                            </p>
                                        </div>



                                        <div class=" col-4" style="margin-left: 0px;">
                                        <div class="avatar  " style="">
                                            <img src="assets/images/faces/3.jpg" alt="" srcset="">
                                             <p class="" style="margin-top: 5px; margin-left: 3px; font-size: 14px;">
                                                <?php 
                                                    echo $result61["name"];
                                                    echo " ";
                                                    echo $result61["surname"];

                                                ?>
                                            </p>
                                        </div>
                                        <p class="" style="margin-top: 5px; margin-left: 0px;">
                                                <?php 
                                                    echo $result61["steps"], " шагов";
                                                    

                                                ?>
                                            </p>
                                        </div>
                                        <div class=" col-4" style="margin-left: 15px;">
                                        <div class="avatar " style="margin-left: 0px;">
                                                <img src="assets/images/faces/2.jpg" alt="" srcset="">
                                                 <p class="" style="margin-top: 5px; margin-left: 3px; font-size: 14px;">
                                                <?php 
                                                    echo $result62["name"];
                                                    echo " ";
                                                    echo $result62["surname"];

                                                ?>
                                            </p>
                                        </div>
                                        <p class="" style="margin-top: 5px; margin-left: 0px;">
                                                <?php 
                                                    echo $result62["steps"], " шагов";
                                                    

                                                ?>
                                            </p>
                                        </div>
                                      </div>                                  </div>
                                </div>
                                <div class="card-body px-0 py-1 ml-4" style="margin-left: 15px;">
                                    <table class="table table-borderless ml-4">
                                        
                                    
                                        <tr>
                                            <td class="col-3">Сделать <?php echo $result2["task1"]; ?> шагов</td>
                                            <td class="col-6">
                                                <div class="progress progress-danger">
                                                    <div class="progress-bar" role="progressbar" style="width: <?php echo $teamtotalpercent;?>%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td class="col-3 text-center"><?php echo $teamtotal; ?>/<?php echo $result2["task1"]; ?></td>

                                        </tr>
                                        
                                        
                                    </table>
                                </div>

                                 <div class="card widget-todo mx-auto col-12 d-flex">
                                     <div class="col-5 mx-auto card-header">
                                     <h4> Награда: 500 баллов</h4>
                                    </div>
                                 </div>
                            </div>

                        </div>
                        <?php } ?>
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
<input type="text" name="steps" class="steps">

<button class="button edit">Submit</button>
<script type="text/javascript">
    sec1 = document.querySelector(".sec1");
    sec2 = document.querySelector(".sec2");
    btn2 = document.querySelector(".btn2");
    btn1 = document.querySelector(".btn1");
    let sec1fn = function(){
       sec1.style.display = "none";

    }
    let sec2fb = function(){
       sec2.style.display = "block";

    }
    let sec2fn = function(){
       sec2.style.display = "none";

    }
    let sec1fb = function(){
       sec1.style.display = "block";

    }
    btn2.onclick = function()
{
    sec1.style.opacity = 0;
    sec2.style.opacity = 1;
    setTimeout(sec1fn, 800);
    setTimeout(sec2fb, 800);

}
btn1.onclick = function()
{
    sec2.style.opacity = 0;
    sec1.style.opacity = 1;
    setTimeout(sec2fn, 800);
    setTimeout(sec1fb, 800);

}

</script>
<script>
$(document).ready(function(){
       

            var stValue = $('input.ursteps').val();
            
            console.log(stValue);

            $.ajax({

                method: "POST",
                url: "steptotal.php",
                data: { 

                    totalst: stValue

                }
            })

            .done(function(){

                   console.log(stValue);
                });
                

        
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

                    location.reload();

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