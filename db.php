<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood donation";

// Create conection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check conection
if (!$con) {
    die("conection failed: " . mysqli_conect_error());
}
if(isset($_POST['submit']))
{ 
    //Member variables from HTML
    $username = $_POST['username'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$phoneno = $_POST['phoneno'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$location = $_POST['location'];
	$bloodgroup = $_POST['bloodgroup'];
	$pincode=$_POST['pincode'];
    $sql = "INSERT INTO details(username,emailid,password,phoneno,age,gender,location,bloodgroup,pincode)
			VALUES ('$username','$emailid','$password','$phoneno','$age','$gender','$location','$bloodgroup','$pincode')";
    if (mysqli_query($con, $sql)) {
	     echo "Registered successfully";
		header('location:onregister.html');
    } 
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    } 
}
if(isset($_POST['login']))
{
		$email = $_POST['emailid'];
		$password = $_POST['password'];
		$query = "SELECT * FROM details WHERE emailid='$email' AND password='$password'";
		$retval = mysqli_query($con,$query);
		if(mysqli_num_rows($retval) == 1){
			header('location:onregister.html');
		    exit();
		}
		else{
			echo "Invalid login!";
			exit();
		}
		
}
mysqli_close($con);
?>