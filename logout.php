 <?php 
session_start();
 if(isset($_SESSION['auth'])) // yedi login xa vanni satya ho vaney
 {

    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    // In PHP, the unset() function is used to destroy a given variable. When you use unset() on a variable, it effectively removes the variable from memory, making it no longer available or defined in the script.
}
header('Location:index.php') // the reason its outside of 

 ?>