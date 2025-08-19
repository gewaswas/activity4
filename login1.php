<?php

$conn =mysqli_connect("localhost","root", "","admin");

if(!$conn){
    die("Balda!");
}

$mobile=$_POST=["mobile"];
$password=$_POST["password"];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query ($conn,$sql);


if(mysqli_num_rows($result)>0){
    echo"Paldo! =)";
    exit();

}else{
    echo"balda!";

}
mysqli_close($conn);
?>
