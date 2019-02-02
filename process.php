<?php
	$uname = $_POST['user'];
	$psrd = $_POST['pass'];
	$loct = $_POST['loc'];

	$uname = stripcslashes($uname);
	$psrd = stripcslashes($psrd);
	$loct = stripcslashes($loct);
	
	$link = mysqli_connect("localhost","root","","hospital");
    if(mysqli_connect_error()){
    	die ("ERROR");
    }

    $res = "select * from main_admin where username = '".$uname."' and password = '".$psrd."' and place = '".$loct."' ";

	$result = mysqli_query($link, $res) 
		or die("Failed to query database ".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $uname && $row['password'] == $psrd && $row['place'] == $loct ){
		$query="SELECT `adhaar_id`, `Sex`, `Date_of_birth`, `First_name`, `Last_name`, `Area` FROM `patient` WHERE Area='".$loct."'";
		if($result=mysqli_query($link,$query))
		{
			while($row=mysqli_fetch_array($result)){
				echo "<br>"."<br>"."<br>"."<p style='color:black;font-size:200%;'>"."Adhaar Id of the patient is"." ".$row[0]."</p>"."<br>";
				echo "<p style='color:black;font-size:200%;'>"."Sex of the patient is"." ".$row[1]."</p>"."<br>";
				echo "<p style='color:black;font-size:200%;'>"."Date of birth of the patient is"." ".$row[2]."</p>"."<br>";
				echo "<p style='color:black;font-size:200%;'>"."First name of the patient is"." ".$row[3]."</p>"."<br>";
				echo "<p style='color:black;font-size:200%;'>"."Last name of the patient is"." ".$row[4]."</p>"."<br>";
				echo "<p style='color:black;font-size:200%;'>"."Area from where the patient is"." ".$row[5]."</p>"."<br>";
				echo "<hr>";
			}
		}
	}
	else{
		echo "Failed to login";

	}
?>
<html>
	<head>
		<title> Administrator View </title>
	<head>
	<style>
		body{
			background-image: url("photo(10).jpg");
		}
	</style>
</html>