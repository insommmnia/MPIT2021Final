<!DOCTYPE html>
<html lang="en">
<head>
   <title>Личный кабинет</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/logo.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body style="background-color: #F2F7FF">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <div class=" col-12" style="height: 200px;">
                    <div class=" col-5 mx-auto" style="background-image: url(img/logo.png); background-size: 100% 100%; height: 200px;">
                        
                    </div>
                </div>
                    <form method="POST" id="signup-form" action="vfod.php" class="signup-form">
                        <h2 class="form-title">Войти</h2>
                        
                        
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Ваша почта"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Пароль"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Повторите пароль"/>
                        </div>
                        
                        <div class="form-group " >
                            <a  class="txt1">
                                <?php echo "<p style='color:red'>".$_GET['error']."</p>" ?>
                            </a>
                            <input type="submit"  name="submit" id="submit" class="form-submit " value="Войти"/>
                             
                           
                        </div>
                    </form>
                    <p class="loginhere">
                        Нет аккаунта? <a href="log.php" class="loginhere-link">Зарегистрирорваться</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="js1/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>