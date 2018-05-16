<?php



session_start();


$con = mysqli_connect('localhost','root','12345','clubs') or die ("Database Connection Failed");


$_SESSION["username"]=mysqli_real_escape_string($con,$_POST['username']);

$_SESSION["password"]=mysqli_real_escape_string($con,$_POST['password']);



$username = $_SESSION["username"];




$password = $_SESSION["password"];



$query = "select * from login where username = '$username' and password='$password'";


$result = mysqli_query($con, $query) or die("INVALID USERNAME OR PASSWORD".mysqli_error($con));

$row = mysqli_fetch_array($result);


if($row == TRUE)

{

if($row[role]==2)
{

header("location:admin.php");
} 
	

else
{

header("location:index.html"); 
}
 
}

else
{
	

echo "<script type='text/javascript'>
alert('Login Not Successfull');

		</script>";  
	
	
	
  header("location: index.html");

}
?>












