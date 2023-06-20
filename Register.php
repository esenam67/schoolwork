<!DOCTYPE html>
<html>

<head>

 <title>Registration</title>
    <!--font-awesome-->
    <script src="https://kit.fontawesome.com/7e82dfab85.js" crossorigin="anonymous"></script>
    <!--icon-->
    <script src="https://kit.fontawesome.com/7e82dfab85.js" crossorigin="anonymous"></script>
    <!--normalize-->
    <link rel="stylesheet" href="./Css/normalize.css" />
    <!-- main css -->
<link rel="stylesheet" href="./Css/main.css">
<link rel="shortcut icon" type="images/png" href="./boon/images/logo.png">
</head>

<body>
<!-- scroll btn -->
  <button onclick="topOnScroll()" id="myBtn" title="Go to top">Top</button>
<!-- navbar -->
<nav class="navbar">
  <div class="nav-container" >
<!-- nav-logo -->

<div class="logo">
  <img src="./boon/images/logo.png"
  alt="logo" class="logo-img">

  <button class="menu_btn btn">
    <i class="fa-solid fa-bars"></i>
  </button>
</div>


<!-- nav-link -->

<div class="menu-links">
  <a href="index.php" class="menu-link" target="_blank">home</a>
  <a href="AboutUs.php" class="menu-link" target="_blank">about</a>
  <a href="Program.php" class="menu-link" target="_blank">programs</a> 
  <a href="Recipe.php" class="menu-link" target="_blank">recipes</a>

  <div class="menu-link menu-contact">
    <a href="ContactUs.php" class="btn" target="_blank">contact us</a>
  </div>
</div>

</div>
</nav>
  <!-- main body -->
  <main class="main-body">
   



    <div class="cont">
        
        <div class="login">


<div class="loginT">
  <h1 class="title">registration</h1>

  <form action="singnup-process.php" method="post">

      <div class="input1">
          <input type="text" placeholder="Enter your user name" name="userName" requiered>
          <i class="uil uil-user"></i>
      </div>
    
      <div class="input1">
          <input type="text" placeholder="first name"  name="firstName" requiered>
      
      </div>

      <div class="input1">
          <input type="text" placeholder="last name"   name="lastName"requiered>
      </div>


      <div class="input1">
          <input type="text" placeholder="Email"  name="email" requiered>
      <i class="uil uil-envelope icon"></i>
      </div>

      <div class="input1">
          <input type="password" class="passW" placeholder="password"  name="password" minlength="8" requiered>
          <i class="uil uil-padlock icon"></i>
          <i class="uil uil-eye-slash showHidePw"></i>
      </div>

      <div class="input1">
          <input type="password" class="passW" placeholder=" repeat password"  name="confirmpassword" minlength="8" requiered>
          <i class="uil uil-padlock icon"></i>
          <i class="uil uil-eye-slash showHidePw"></i>
      </div>
   

      <div class="check">
          <div class="checkbox">
              <input type="checkbox" id="logcheck">
              <label for="logcheck" class="check1" id="color-this"> remember me</label>
          </div>
          <a href="#" class="check1"> forgot password</a>
      </div>




      <div class="input1 submit">
         <input type="submit"  value="sign Up" >
      </div>
      
  </form>

  <div class="signIn">
      <span id="signIn">you already have an account?
          <a href="logIn.php" class="check1">LogIn</a>
      </span>
  </div>

</div>


        </div>
</div>








  </main>
<!-- footer -->
<footer class="footer">
  <!-- footer links -->
 
<div class="footer-links" target="_blank">
<h5> <a href="Free-trial.php" class="lnk" target="_blank">free trial</a></h5>
<div class="flexwrap">
<a href="FAQs.php" class="footer-link lnk" target="_blank">faq</a>
<a href="ContactUs.php" class="footer-link lnk" target="_blank">contact</a>
<a href="privacyPolicy.php" class="footer-link lnk" target="_blank">privacy policy</a>
<a href="cookies.php" class="footer-link lnk" target="_blank">cookies</a>
</div>
</div>
  <!-- footer copy rights -->

<div class="copy_rights"> 
<img src="./boon/images/logo.png"
alt="logo" class="footer-img">
<p> &copy; <span id="date"></span>, AyoFitness_Gym built by <a href="#" class="footer-link lnk" target="_blank">Grace</a></p>
</div>
  <!-- footer media -->

<div class="footer-media">
<a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank"> <img src="./boon/icon/facebook.png" alt="facebook logo"  width="29px" ></a>
<a href="https://www.instagram.com/" target="_blank"> <img src="./boon/icon/instagram.jpg" alt="facebook logo"  width="35px">
   </a>
  <a href="https://twitter.com/" target="_blank"> <img src="./boon/icon/twitter-black.png" alt="facebook logo"  width="24px"> 
   </a>
</div>
</footer>

  <script src="./js/AyoFitness_Gym.js"></script>
</body>
</html>