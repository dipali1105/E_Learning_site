<?php

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    //connection
 $conn = new mysqli('localhost','root','','sform');

$s = "SELECT * FROM `login1`  login WHERE email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1){

    echo"email alredy taken";

}
else
{
    $reg="insert into login1(email,username,password)value('$email','$username','$password')";
    mysqli_query($conn,$reg);
    echo"registration successfullllyyy.....";
}
?>







