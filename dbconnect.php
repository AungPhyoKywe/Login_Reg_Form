<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$erro=array();


// Create connection
$db =  mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['register'])){

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];


if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)) {

	array_push($erro,"Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	# code...
}




if(!preg_match("/^[a-zA-Z'-]+$/",$firstname)) {




 array_push($erro,"invalid first name");


} 

if(!preg_match("/^[a-zA-Z'-]+$/",$lastname)) {




 array_push($erro,"invalid lastname name");


} 

// Check connection

if(empty($firstname)){

	array_push($erro,"Firstname require!");
}

if(empty($lastname)){

	array_push($erro,"Lastname require!");
}
if(empty($email)){

	array_push($erro,"Email require!");
}

if(empty($password)){

	array_push($erro,"Password require!");
}
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    
}
else{


	array_push($erro,"Email not invalid!");
}


if(count($erro)==0){

$sql = "INSERT INTO persons (firstname, lastname, email,password)
VALUES ('$firstname','$lastname', '$email','$password')";




mysqli_query($db,$sql);
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['success']="You are now login";
 echo "<script type='text/javascript'>document.location.href='web.php';</script>";

}


}

if(isset($_POST['login'])){


$email=$_POST['email'];
$password=$_POST['password'];
if(empty($email)){

	array_push($erro,"Email require!");
}

if(empty($password)){

	array_push($erro,"Password require!");
}

if(count($erro)==0){

    

	$query="SELECT * FROM persons WHERE email='$email' AND password='$password' ";

	$results=mysqli_query($db,$query);

	if (mysqli_num_rows($results)==1) {

        
		$_SESSION['firstname']=$firstname;
		$_SESSION['lastname']=$lastname;
$_SESSION['success']="You are now login";
     echo "<script type='text/javascript'>document.location.href='web.php';</script>";

		# code...
	}else{


		array_push($erro,"wrong password and email");
		
	}



}



}

//logout





?>


