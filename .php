<?php
$conn = mysqli_connect ('localhost', 'root', '', 'wit');
if(!$conn){
    die("connection lost");
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql= "SELECT * FROM staff WHERE email = '$email' AND password = '$password'";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
    echo "LOGIN SUCCESS!";

   exit();


}else{
    echo("LOGIN FAILED! ");
   
   
 
}

   mysqli_close($conn);

?>
