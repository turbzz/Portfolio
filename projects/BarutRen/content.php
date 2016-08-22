<?php include 'header.php'; ?>

<div class="login">
<div class="welcome">
<img id="logo_img" src="http://barutren.dk/intranet/assets/images/logo.png">
<!--<span class="logo_sub">INTRANET</span>-->
</div>
<div class="box-login">
<div class="box_head_login">Login</div>
<div class="box_btm_login">
<div class="box_txt_login"> 
<div id="infoMessage"></div>

<form action="home.php" method="post" accept-charset="utf-8">   
  <p>
    <label for="identity">Email/Username</label>
    <input type="text" name="identity" value="" id="identity">  </p>

  <p>
    <label for="password">Password</label>
    <input type="password" name="password" value="" id="password">  </p>

  <p class="floatL rememberme">
    <label for="remember">Remember Me</label>
    <input type="checkbox" name="remember" value="1" id="remember">  </p>  
    
  <p class="floatR"><input type="submit" name="submit" value="Login"></p>    
</form>
<p class="iforgot"><a href="forgot_password">Forgot your password?</a></p>
</div>
</div>
</div>
</div>