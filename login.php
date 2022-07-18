<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Neucha|Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div id="mwanzo1">
    <header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h2 class="brand"><a href="login.php">Mechani<span>Call</span>!</a></h2>

            </nav>
        </div>
        <div class="login-reg-panel">
            <div class="login-info-box">
                <h2>Have an account?</h2>
                <p>Login instead..</p>
                <label id="label-register" for="log-reg-show">Login</label>
                <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
            </div>

            <div class="register-info-box">
                <h2>Don't have an account?</h2>
                <p>Take a minute to create an account with us and get to find mechanics around you at the tap of a button </p>
                <label id="label-login" for="log-login-show">Register</label>
                <input type="radio" name="active-log-panel" id="log-login-show">
            </div>



                <!--start db register-->
                <?php
                require('db.php');
                // If form submitted, insert values into the database.
                if (isset($_REQUEST['username'])){
                    // removes backslashes
                    $username = stripslashes($_REQUEST['username']);
                    //escapes special characters in a string
                    $username = mysqli_real_escape_string($con,$username);
                    $phone = stripslashes($_REQUEST['phone']);
                    $phone = mysqli_real_escape_string($con,$phone);
                    $email = stripslashes($_REQUEST['email']);
                    $email = mysqli_real_escape_string($con,$email);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con,$password);
                    $trn_date = date("Y-m-d H:i:s");
                    $query = "INSERT into `users` (username, password,phone, email, trn_date)
VALUES ('$username', '".md5($password)."', '$phone', '$email', '$trn_date')";
                    $result = mysqli_query($con,$query);
                    if($result){
                        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/></div>";
                    }
                }else{
                ?>
                <!--End db register-->


            <div class="white-panel">
                <div class="form">
                    <div class="register-show" >
                        <h2>REGISTER</h2>
                        <form name="registration" action="" method="post">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="text" name="phone" placeholder="Phone number" required>
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="password" placeholder="Confirm Password" required>
                            <input type="submit" name="submit" value="Register" />
                        </form>
                    </div>

            </div>
                <?php } ?>

                <div class="form">
                    <div class="login-show">
                        <h2>LOGIN</h2>

                        <!--<form action="" method="post" name="login">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input name="login" type="submit" value="Login" />
                        </form>-->
                        <p>Mechanicall,Always ready to offer a helping hand</p>

                        <a href="login2.php"  id="selecta" type="button" class="btn btn-primary">Login
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <script>

            $(document).ready(function(){
                $('.login-info-box').fadeOut();
                $('.login-show').addClass('show-log-panel');
            });


            $('.login-reg-panel input[type="radio"]').on('change', function() {
                if($('#log-login-show').is(':checked')) {
                    $('.register-info-box').fadeOut();
                    $('.login-info-box').fadeIn();

                    $('.white-panel').addClass('right-log');
                    $('.register-show').addClass('show-log-panel');
                    $('.login-show').removeClass('show-log-panel');

                }
                else if($('#log-reg-show').is(':checked')) {
                    $('.register-info-box').fadeIn();
                    $('.login-info-box').fadeOut();

                    $('.white-panel').removeClass('right-log');

                    $('.login-show').addClass('show-log-panel');
                    $('.register-show').removeClass('show-log-panel');
                }
            });

        </script>

</body>
</html>