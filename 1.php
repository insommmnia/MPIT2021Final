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
        
    </style>
</head>

<body style="background-color: #F2F7FF">
<?php 
$con = mysqli_connect("mysql.09-15-pn.myjino.ru","09-15-pn","IT.SCHOOL123","09-15-pn_nikita-alekseev");
$text_query =  "SELECT * FROM users WHERE id = '{$_SESSION['id']}'";
$query = mysqli_query($con, $text_query);
    
$result = $query->fetch_assoc();
$text_query2 =  "SELECT * FROM teams WHERE id = '{$result["idteam"]}'";
$query2 = mysqli_query($con, $text_query2);
$result2 = $query2->fetch_assoc();

$text_query5 =  "SELECT * FROM steps WHERE userid = '{$_SESSION['id']}'";
$query5 = mysqli_query($con, $text_query5);
$steps = $query5->fetch_assoc();

echo $_SESSION['id'];

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
            echo $usertotal;
           
           
                                                                  
                                                    
                                                            
                                                        
                                                 

?>
<input type="" name="" class="ursteps" <?php echo "value='".$usertotal."'" ?>> 
<?php if ($result["idteam"] == "0") { ?>
<div class="col-md-6 col-12">
                           <div class="card">
                               <div class="card-header">
                                   <h4 class="card-title">
                                        Еженедельное задание
                                   </h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       <p>
                                            Новое задание! В течение недели вам будут даваться новые цели. И в конце недели вы получите 500 бонусов
                                       </p>
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
            
            <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
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
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
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
                            <div class="col-7 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
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
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
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