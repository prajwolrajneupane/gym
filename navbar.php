<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Style Haven</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
<?php
session_start();

if(isset($_SESSION['auth'])){  // so what this is vanda kheri when the user is logged in we will show them the logout wala option
   ?>
 <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

   <?php
}

else{ //yedi user logged in xaina vaney chai we show this
  ?>
  <li class="nav-item">
  <a class="nav-link" href="login.php">Login</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="register.php">Register</a>
</li>

<?php
}

?>


 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>