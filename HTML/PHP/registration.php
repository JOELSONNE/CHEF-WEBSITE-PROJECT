<?php
session_start();
    include("conncection.php")
?>




<!DOCTYPE html>
 <html lang="en">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, inintial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" 
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
 integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
 crossorigin="anonymous" 
 referrerpolicy="no-referrer"/>
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" 
 rel="stylesheet">
 <link rel="stylesheet" href="./CSS/registration.CSS">
    <body>
        <div class="cotn_princpal">
            <div class="cont_centrar">
                
                <div class="cont_login">
                    <div class="cont_info_log_sign_up">
                        <!---login--->
                        <div class="md_login">
                            <div class="ba_opcitiy">
                                <h2> Login</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <button class="btn_login" onclick="cambiar_login()"> LOGIN</button>         
                            </div>
                        </div>
                        <!---SignUp--->
                        <div class="md_sign_up">
                            <div class="ba_opcitiy">
                                <h2>SIGN UP</h2>
                                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
                                <button class="btn_sign_up" onclick="cambiar_sign_up()"> SIGN UP</button>
                            </div>
                        </div> 
                    </div>
                    <div class="back_info">
                        <div class="img_back_grey">
                            <img src="/Screenshot 2024-03-20 at 18.20.54.png" alt="picture background"/>
                    </div>
                </div>
                <!---login & signup-->
                <div class="cont_forms">
                    <div class="img_back">
                        <img src="/Screenshot 2024-03-20 at 18.20.54.png" alt="picture background"/>
                    </div>
                    <div class="form_login">
                        <a href= "./PHP/login.php" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2>LOGIN</h2>
                        <input type="text" placeholder="Email"/>
                        <input type="password" placeholder="Password"/>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                    <div class="form_sign_up">
                        <a href="./PHP/register.php" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2> SIGN UP</h2>
                        <input type="text" placeholder="Email"/>
                        <input type="text" placeholder="Username"/>
                        <input type="password" placeholder="Password"/>
                        <input type="password" placeholder="Confirm Password" />
                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                    </div>
                </div>
            </div>
        </div>
        <script src= "./JAVA/registration.js"></script>
    </body>
</html>
