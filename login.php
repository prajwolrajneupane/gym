<?php include('header.php');

?>

<div class="py-5">
  
  
  <div class="container" >
    <div class="row ">
      <div class="col-md-12">
        <div class="card">
          <div class="shush">

          <?php

          if(isset( $_SESSION['message'])){?>

            <div class="alert alert-warning" role="alert">
            <?=$_SESSION['message'];?>
  </div>
  <?php

  unset($_SESSION['message']);
          }   
          ?>


          </div>
          <div class="card-header">
            <h4> LogIn </h4>
            
            
          </div>
          <div class="card-body">
            
          
            <form action="authcode.php" method="POST">
            <div class="form-group " >
               
              <div class="form-group " >
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
              </div>
              <div class="form-check">
              </div>
              <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
</div>

<div class="forgot" style="margin-top:20px;">
<p style="text-align:center" >
Dont have an account?
</p>

<div style="display: flex; justify-content: center;">
    <a href="register.php">Sign In</a>
</div>
<div>
  
</div>

