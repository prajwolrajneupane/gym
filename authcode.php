<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>





<?php
session_start(); //session start garna
include('dbcon.php');


//register ko lagi:
if(isset($_POST['register_btn'])) // isset garera chai, if the button is clicked this function is true
{
$name=$_POST['name'];
// so we made a variable (i.e. name) jasle chai input type name="name" xa tesko value linxa
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

 if($password==false || $cpassword===false){
    $_SESSION['message']="ramrari form varnus🙏🙏";
    header('Location:register.php');  
}


// so what this will do is if the password wala part is blank, it wont redirect anywhere, it be in     header('Location:../register.php');  and teta print that warning wala part
else if($password==$cpassword)
{
$insert_query="INSERT INTO users(name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
$result=mysqli_query($con, $insert_query) ; 
//this result right here, inserts insert_query into the database frfr
if($result==TRUE){
    $_SESSION['message']="Registered Successfully";
    header('Location:login.php'); //so what this code says if when result is pushed without erros, redirect to login page hehe
echo"data updation sucessful";
}
else{
    echo "data updation error";
}
}
else{
    $_SESSION['message']="Passwords do not match"; //session ma store that message

header('Location:register.php'); //when things goes wrong, we get redirected back to register.php
}
}



// login ko lagi:

else if(isset($_POST['login_btn']))

{
$email=$_POST['email'];
$password=$_POST['password'];


$login_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$login_query_run = mysqli_query($con, $login_query);

if(mysqli_num_rows($login_query_run)>0)
{
    $_SESSION['auth']=true;
    // This is often done after successfully authenticating a user, as a way to track whether the user is logged in or not.
 
    $userdata=mysqli_fetch_array($login_query_run); //this will bring the data and put it inside the userdata variable
    
    $username=$userdata['name'];
    $useremail=$userdata['email']; 
// these two username ra useremail vaihalyo

    // so auth user is yo duita name ra email
    $_SESSION['auth_user']=[
        'name'=>$username,
        'email'=>$useremail
    ];

    $_SESSION['message']="logged in successfully";
    header('Location: index.php');
}

else{


    $_SESSION['message']="Invalid Credentials";
    header('Location:login.php');
    
}

}
?>



<!-- when clicked on getMembership -->

<?php
// Logic for handling the Get Membership button click
if (isset($_POST['get_membership'])) {
    if (isset($_SESSION['auth'])) {
        // Redirect to the membership panel
        header("Location: getMembership/membership_panel.php");

        ?>
    <div>
You are not logged in

    </div>

        <?php 
    } else {
        // Redirect to the login form
        header("Location: register.php");
       
    }
    exit();
}
?>


<!-- Buy now ma thichda: -->
<!-- chomu haru yeta kei halao hai -->
