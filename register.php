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
          <div style="display:flex; align-items:center; justify-content:center"  class="card-header">
            <h4 > Application Form </h4>
            
            
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
              <button type="submit" name="register_btn" class="btn btn-primary" style="background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer; width:100%" >Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
</div>

</div>


<div class="forgot" >
<p class="alreadyhave" style="text-align:center; color:white;" >
Already have an account?
</p>

<div style="display: flex; justify-content: center;color:white;">
    <a href="login.php">Log In</a>
</div>
<div>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>

    body {
        background: url('https://i.pinimg.com/736x/6e/7c/4d/6e7c4d311bfc2abecbb04866afac4f33.jpg');
      background-size: cover;
    background-repeat: no-repeat; 
      font-family: 'Poppins', sans-serif; 
   
    }

    .py-5 {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
      width: 100vh;
    }
    .card-header {
      background-color: #f97316; 
      color: white;
      border-bottom: 1px solid #e9ecef;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      padding: 1rem;
    }

    .card-body {
      padding: 2rem;
    }

    .form-group {
      margin-bottom: 0.1rem;
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    input.form-control {
      border-radius: 5px;
      border: 1px solid #ced4da;
    }

    input.form-control:focus {
      border-color: #f97316; /* Orange color */
      box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25); /* Light orange shadow */
    }

    .btn-primary {
      background-color: #f97316; /* Orange color */
      border-color: #f97316; /* Orange color */
      border-radius: 5px;
      padding: 0.75rem 1.5rem;
    }

    .btn-primary:hover {
      background-color: #d96313; 
      border-color: #d96313; 
    }

    .alert-warning {
      background-color: #fff3cd;
      color: #856404;
      border: 1px solid #ffeeba;
      border-radius: 5px;
      padding: 1rem;
      margin-bottom: 1rem;
    }

    .forgot {
      margin-top: 2rem;
      text-align: center;
    }

    .forgot p {
      font-size: 1rem;
      color: #333;
    }

  


.alreadyhave{
  margin-top: -50px;
  
}
    
    a{
      color:white;
      text-decoration: none;
      margin-bottom: 20px;
      transition: 0.3s;

    }
    a:hover{
      color: black;
    }
  </style>
</head>
