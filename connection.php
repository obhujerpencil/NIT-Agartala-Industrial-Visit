<?php
if(isset($_POST['name'])){
 $server="localhost";
 $username="root";
 $password="";
 $database="nit";
 $conn=mysqli_connect($server,$username,$password,$database);
 if(!$conn){
    die("unable to connect ". mysqli_connect_error());
 }
 //echo "connected to db.";
$name=$_POST["name"];
$semester=$_POST["sem"];
$phone=$_POST["phn"];
$mail=$_POST["email"];
$others=$_POST["area"];

 $sql="INSERT INTO `visit` (`name`, `sem`, `phone`, `mail`, `others`, `date`) VALUES ('$name', '$semester','$phone','$mail','$others', current_timestamp())";
 /*$sql="INSERT INTO `visit` (`name`, `sem`, `phone`, `mail`, `others`, `date`) VALUES ('Zero123', 5,'9774406695','datta@gmail.com','cricket is love', current_timestamp())";*/
 //echo $sql;
 $result=mysqli_query($conn,$sql);
 if ($result==false) {
   echo "error: ". mysqli_error($conn);
 }
 if($result==true){
   echo "Sucessfully submitted";
 }
 mysqli_close($conn);
}
