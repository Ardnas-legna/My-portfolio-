<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die ("failed to connect".$conn);
}
else {
echo"connected successfully";

$username=$_POST['username'];
$email=$_POST['email'];
$usersubject=$_POST['usersubject'];
$textarea=$_POST['textarea'];

$sql = "INSERT INTO contact (username, email, usersubject,textarea)
VALUES ('$username','$email', '$usersubject', '$textarea')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>

