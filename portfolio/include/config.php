<?php

$servername="localhost";
$username="root";
$password="";
$dbname="responsiveform3";

$connect=mysqli_connect($servername,$username,$password,$dbname);

if($connect)
{
   // echo "Successfully Connected";
}
else{
    echo "Connectiom Failed";
}

?>

