<?php



$n1=$_POST['email'];
$n2=$_POST['uname'];
$n3=$_POST['phone'];
$n4=$_POST['password'];
$n5=$_POST['confirm'];


$conn = new mysqli("localhost", "root", "", "ewaste");
// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 
		
  
	else
	{$sql = "SELECT max('adminid') from adminlogin";
	$result = $conn->query($sql);
    $res=$sql+1;
	//echo"<br>$res";


$sql = "INSERT INTO adminlogin (adminid,username,password,confirm,emailid,phone)
VALUES ($res,'$n2','$n3','$n4','$n5','$n1')";

	}

if ($conn->query($sql) === TRUE) {
    header("Location:sidenav.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
$conn->close();
?>
