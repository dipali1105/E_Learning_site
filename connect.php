<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    //connection
 $conn = new mysqli('localhost','root','','educationalsite');

$s = "SELECT * FROM `contact`  login WHERE email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1){

    echo"email alredy taken";

}
else
{
    $reg="insert into contact(name,email,subject,message)value('$name','$email','$subject','$message')";
    mysqli_query($conn,$reg);
    echo"contact registration successfullllyyy.....";
}
?>




