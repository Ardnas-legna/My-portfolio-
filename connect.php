<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn){
die("error here:" .mysqli_connect_error());
}
else{
echo "success";
}
?>