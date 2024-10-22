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
            <h4> LOGIN </h4>
            
            
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
              <button type="submit" name="login_btn" class="btn btn-primary" style="background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer;width:100%">LOGIN</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
</div>

<div class="forgot" style="margin-top:20px;">
<p style="text-align:center; color:white;" >
Dont have an account?
</p>

<div style="display: flex; justify-content: center;color:white;">
    <a class="signIn" href="register.php" 
    >Sign In</a>
</div>
<div>
  
</div>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background: url('https://i.pinimg.com/736x/6e/7c/4d/6e7c4d311bfc2abecbb04866afac4f33.jpg');
      background-size: cover;
    background-repeat: no-repeat; 
      font-family: 'Poppins', sans-serif; 
   display: flex; 
        justify-content: center;
      align-items: center;
      height:100vh; 
      margin: 00px;
    }

    .container {
      width: 80vh;
      margin-top: 40px;
    }

    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 4px rgba(0, 0, 0, 0.2);
      background-color: #fff;
    }

    .card-header {
      background-color:#F97316; 
      color: white;
      border-bottom: 1px solid #e9ecef;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      padding: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card-body {
      padding: 50px;
      

    }

    .form-group {
      margin-bottom: 0.6rem;
      
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    input.form-control {
      border-radius: 5px;
      border: 1px solid #ced4da;
      height:40px;
      font-size: 18px;
      padding: 10px;
    }

    input.form-control:focus {
      border-color: #f97316; 
      box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25); 
      
    }

    .btn-primary {
      background-color: #f97316; 
      border-color: #f97316; 
      border-radius: 5px;
      padding: 0.75rem 1.5rem;
      font-size: 16px;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #d96313; 
      border-color: #d96313; 
    }

    /* Alert Styles */
    .alert-warning {
      background-color: #fff3cd;
      color: #856404;
      border: 1px solid #ffeeba;
      border-radius: 5px;
      padding: 1rem;
      margin-bottom: 1rem;
    }
    .forgot {
      text-align: center;
    }

    .forgot p {
      font-size: 1rem;
      color: #333;
      margin-bottom: 0.5rem; 
    }

    .forgot .sign-in-btn {
      display: inline-block;
      margin-top: 0.5rem;
      padding: 0.75rem 1.5rem;
      font-size: 16px;
      font-weight: 500;
      color: white;
      background-color: #007bff; 
      border: none;
      border-radius: 5px;
      text-decoration: none;
      text-align: center;
      transition: background-color 0.3s, box-shadow 0.3s;
    }

    .forgot .sign-in-btn:hover {
      background-color: #0056b3; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    .signIn{
      transition: 0.3s;

    }
    a{
      color:white;
      text-decoration: none;

    }
    a:hover{
      color: black;
    }
  </style>
</head>
