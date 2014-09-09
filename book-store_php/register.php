<?php
session_start();
$db=mysqli_connect('localhost','root',"",'registration') or die('Error connecting to MySQL server.');
// connecting with database registration
$name= htmlEntities($_POST['name'], ENT_QUOTES);
$email=htmlEntities($_POST['mail'], ENT_QUOTES);
$phone=htmlEntities($_POST['phone'], ENT_QUOTES);
$addr=htmlEntities($_POST['address'], ENT_QUOTES);
$gen=htmlEntities($_POST['venue'], ENT_QUOTES);
$budg=htmlEntities($_POST['budget'], ENT_QUOTES);
$date=htmlEntities($_POST['date'], ENT_QUOTES);


{
echo "INVALID E-MAI";
}
$sanitizedInput = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $sanitizedInput;

if(empty($name) or empty($email) or empty($phone))
{ $_SESSION['message']="All fields are mandatory";
header("Location:Registraction.php");
}
else if (! filter_var($email, FILTER_VALIDATE_EMAIL) or !filter_var($name,FILTER_VALIDATE_STRING) or !filter_var($phone,FILTER_VALIDATE_INT))
{
$_SESSION['message']="Please enter valid data";
header("Location:Registraction.php");

} else

{ //Inserting in database registration
$query = "INSERT INTO register (name,email,phone,addr,gender,oddate,budget)Values('$name','$email','$phone','$addr','$gen','$date','$budg')";

$res=mysqli_query($db, $query) or die('Error querying database.');
$_SESSION['message']="You are now registered check your email:" ;
header("Location:index.php");

}

?>