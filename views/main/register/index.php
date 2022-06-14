<!DOCTYPE html>
<html lang="en">
<?php error_reporting(E_ALL ^ E_WARNING);  ?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KMS - Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/Source_ref/public2/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/css/util.css">
    <link rel="stylesheet" type="text/css" href="/Source_ref/public2/css/main.css">
    
</head>

<body>
<script>
        
    </script>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('/Source_ref/public2/images/tech-blocks.jpeg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                <form action="index.php?page=main&controller=register&action=submit" method="POST" class="login100-form validate-form">

                    <span class="login100-form-title p-b-20">
                        <strong>Sign Up</strong>
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Type your email">
                        <span class="focus-input100" data-symbol="&#9993;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="First is required">
                        <span class="label-input100">First Name</span>
                        <input class="input100" type="text" name="first_name" placeholder="Type your first name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Last name is required">
                        <span class="label-input100">Last name</span>
                        <input class="input100" type="text" name="last_name" placeholder="Type your last name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Age is required">
                        <span class="label-input100">Age</span>
                        <input class="input100" type="text" name="age" placeholder="Type your age">
                        <span class="focus-input100" data-symbol="&#9881;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Phone number is required">
                        <span class="label-input100">Phone number</span>
                        <input class="input100" type="text" name="phone_number" placeholder="Type your phone number">
                        <span class="focus-input100" data-symbol="&#9742;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <span id='msg1' style="color:red">
                        
                    </span>
                        <input onkeyup='check();' class="input100" type="password" id="password" placeholder="Type your password">
                        <span style="color: rgb(0, 0, 0);" class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <!--Remember to Check password with retype password is match with password -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Retype Password</span>
                        <span id='message'></span>
                        <input onkeyup='check();' class="input100" type="password" id="retype_password" placeholder="Retype your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="form-check" style="padding-left: 0;">
                        <div class="row">
                            <label class="col-md-3 col-form-label">Giới tính:</label>
                        </div>
                    </div>

                    <div class="form-check form-check-inline" style="padding-left: 1cm;">
                        <input class="form-check-input" type="radio" name="gender" value="1">
                        <label class="form-check-label">Nam</label>
                    </div>

                    <div class="form-check form-check-inline" style="padding-left: 0.5cm;">
                        <input class="form-check-input" type="radio" name="gender" value="0">
                        <label class="form-check-label">Nữ</label>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#" style="color: grey;">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" >
                                <input style="background-color:transparent"  class="login100-form-btn" type="submit" value="Sign up">
                            </button>
                        </div>



                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            <a href="index.php?page=main&controller=login&action=index" style="color: grey;">Sign In</a>
                        </span>
                    </div>

                </form>

                <div class="login100-more" style="background-image: url('/Source_ref/public2/assets/img/slide/VNG Campus 31.jpg');">
                </div>
            </div>

        </div>
    </div>

    <script>
        var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('retype_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
        }
    </script>
    
</body>

</html>