<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="py-5">
  
  
  <div class="container" >
    <div class="row ">
      <div class="col-md-12">
        <div class="card">
          <div class="shush">

          <?php

          if(isset( $_SESSION['message'])){?>

            <div  class="alert alert-warning" role="alert">
            <?=$_SESSION['message'];?>
  </div>
  <?php

  unset($_SESSION['message']);
          }   
          ?>


          </div>
          <div class="card-header">
            <h4> Application Form </h4>
            
            
          </div>
          <div class="card-body">
            
          
            <form action="authcode.php" method="POST">
            <div class="form-group " >
                <label class="form-label" >Name</label>
                <input type="text" name="name" class="form-control" >
              
              </div>
              <div class="form-group " >
                <label class="form-label" >Phone</label>
                <input type="number" name="phone" class="form-control" >
              
              </div>

              <div class="form-group " >
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
              </div>
              <div class="form-group">
                <label >Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" >
              </div>
              <div class="form-check">
              </div>
              <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
</div>

</div>


<div class="forgot" >
<p style="text-align:center" >
Already have an account?
</p>

<div style="display: flex; justify-content: center;">
    <a href="login.php">Log In</a>
</div>
<div>
