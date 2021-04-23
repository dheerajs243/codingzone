<?php

$servername="localhost";
$username="root";
$password="";
$dnname="contactus";


$conn=mysqli_connect($servername,$username,$password,$dnname);

if($conn){echo "The server onnection created succesfully";}
else{die ("Connection was failed:".mysqli_connect_error());}




?>