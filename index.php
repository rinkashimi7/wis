<?php
include 'connection.php';
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dayo Travel Access</title>

        <!-- links--> 
        <link rel="stylesheet" href="styles.css"/>
        <!--Icon link-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
         <!-- font links--> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    </head>

<body>
    
    
        <section class="header">
            <nav>
                <!-- logo nav/ size adjust--> 
                <a href="index.html"><img src="IMAGES/DAYO LOGO.png" width="170" 
                    height="170"></a>
                    <div id="navLinks" class="nav-links">

                    <i class='bx bx-x' onclick="hideMenu()"></i>
                    
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="packages.html">Packages</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                        <li><a href="">Transaction</a></li>
                        <li><a href="About.html">About</a></li>
                       <li><button class="btnLogin-popup">Login</button></li> 
                    </ul>

                </div>
                <i class='bx bx-menu-alt-right'onclick="showMenu" ></i>
            </nav>


            
 <section class="section">
    <div class="wrapper">
        <span class="icon-close"><i class='bx bx-x'></i></span>

<!--LogIn-->
        <div class="logreg-box">
            <div class="form-box login">
                <div class="logreg-title">
                    <h2>Login</h2>
                    <p>Please login to use the platform</p>
                </div>
                <form action="login_db.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>


                        <!--d pa maayos ung sa input bumababa yung Email text-->
                        <input type="email" name="email" required>
                        <label>Email</label> 
                    </div>

                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label> 
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a></div>

                        <button type="submit" class="btn">Login</button>

                        <div class="logreg-link">
                            <p>Don't have an account?
                                <a href="#" class="register-link">Register</a>
                            </p>
                        </div>
                </form>
            </div>



            <!--Register form-->


            <div class="form-box register">
                <div class="logreg-title">
                    <h2>Registration</h2>
                    <p>Please provide the following to verify your identity</p>
                </div>


                <form action="test_reg.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user'></i></span>
                        <input type="text" name="full_name" required>
                        <label>Full Name</label> 
                    </div>
                
                    

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label> 
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label> 
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the Terms & Conditions</label>
                        <a href="#">Forgot password?</a></div>

                        <button type="submit" class="btn">Register</button>

                        <div class="logreg-link">
                            <p>Already have an account?
                                <a href="#" class="login-link"> Login</a>
                            </p>
                        </div>
                </form>
            </div>




        </div>


        <div class="media-options">
            <a href="#">

                <i class='bx bxl-google' ></i>
                <span>Login with Google </span>
            
            
            </a>
        </div>


    </div>

 </section>

 







<div class="text-box">
    <h1 style="color:rgb(255, 255, 255)">Escape the Ordinary with <br/> 
        <!--text color DAYO TRAVEL ACCESS-->
        <font color="#204A32">DAYO TRAVEL ACCESS</font>
        
        
       </h1>
</div>


<div class="availability">
<!--packages-->
<div class="packages">

    <label for="package">Choose your package:</label>
    <select name="package" id="package">
     <!-- homepage pages choices--> 
   <option value="Agoo, La Union">Agoo, La Union</option>
    <option value="Alaminos">Alaminos, Pangasinan</option>
    <option value="baguio">Baguio</option>
    <option value="Bolinao" selected>Bolinao, Pangasinan</option>
    <option value="Manila">Manila</option>
    <option value="Sagada">Sagada</option>
    <option value="San Juan">San Juan, La Union</option>
    <option value="Vigan">Vigan</option>
    
    </select>


</div>


<!--DATE LAYOUT-->
<form>
    <div class="nativeDatePicker">
      <label for="Travel">Select Travel Date:</label>
      <input type="date" id="Travel" name="Travel" />
      <span class="validity"></span>
    </div>
    
  </form>
  <!--QUANTITY TRAVELERS-->
  <div class="travelers">
  <form action="/action_page.php">
    <label for="quantity">Travelers:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10">
    
  </form>
 
</div> 
<!--<div class="button">
  <button type="submit" form="nameform" value="Submit"> Check Availabilty </button>
</div>  -->      
</section>

<!--packages-->

<section class="pack"></section>
<h1>Recommended Packages</h1>
<div class="row">
    <div class="pack-col">

        <h3>Baguio</h3>
        <p>
            Lorem ipsum dolor sit amet. Sed temporibus quibusdam ut autem 
            omnis hic dignissimos provident eum accusantium earum. 
            Aut velit voluptatibus sed galisum laborum ex amet eaque.
        </p>
    </div>

        <div class="pack-col">        
    <h3>San Juan, La Union</h3>
        <p>
            Lorem ipsum dolor sit amet. Sed temporibus quibusdam ut autem 
            omnis hic dignissimos provident eum accusantium earum. 
            Aut velit voluptatibus sed galisum laborum ex amet eaque.
        </p>
    </div>

        <div class="pack-col">
        <h3>Bolinao, Pangasinan</h3>
        <p>
            Lorem ipsum dolor sit amet. Sed temporibus quibusdam ut autem 
            omnis hic dignissimos provident eum accusantium earum. 
            Aut velit voluptatibus sed galisum laborum ex amet eaque.
        </p>  
    </div>
        <div class="pack-col">
        <h3>Vigan City</h3>
        <p>
            Lorem ipsum dolor sit amet. Sed temporibus quibusdam ut autem 
            omnis hic dignissimos provident eum accusantium earum. 
            Aut velit voluptatibus sed galisum laborum ex amet eaque.
        </p>  
    </div>
</div>
</section>


<section class="activities">
    <h1>Activities you can Enjoy!</h1>
   <div class="row">
    <div class="activities-col">
        <img src="IMAGES/ADVENTURE.png">

        <div class="layer">
            <h3>Adventure Packages</h3>
        </div>
    </div>

    <div class="activities-col">
        <img src="IMAGES/HERITAGE.png">
        <div class="layer">
            <h3>Heritage Tours</h3>
        </div>
    </div>


    <div class="activities-col">
        <img src="IMAGES/FOOD.png">
        <div class="layer">
            <h3>Culinary Experiences</h3>
        </div>
    </div>


   </div>

</section>

<!--Footer-->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet. Sed temporibus quibusdam ut autem <br>
        omnis hic dignissimos provident eum accusantium earum. </p>

        <div class="icons">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter' ></i>

        </div>

    <p>Developed by JML</p>
</section>



        <script src="script.js"></script>

    </body>

</html>