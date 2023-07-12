<?php
include_once "../server/database.php";
//get all the values from the form fields
$name =$_POST['name'];
$email =$_POST['email'];
$password=$_POST['password'];
$confirm_password =$_POST['confirm-password'];

//validate the name and email and password
if(!$name){
 echo "Enter your name";
}
else if(!$email){
    echo "Enter your email";
}

else if(!$password){
    echo "Enter your password";
}
else if($confirm_password != $password)
{
    echo "the pasword are not them same";
}
else{

    $sql="INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";
    $result=mysqli_query($conn,$sql);
    echo "ready to go";
}