
<?php 

include 'dbconnect.php';


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style> 

.box{

background-color:#F8F8F8;
border-radius:40px;
position:relative;
left:450px;
width:350px;
height:450px;
border:solid :1px;
border-color:#E6E6FA;

}

.erro{

background-color:#FFC0CB;
border-radius:7px;
border:solid 1px;
width:250px;
position:relative;
top:9px;
margin:0 auto;
height:60px;


}

body {background-color: #E6E6FA;}

</style>



</head>
<body>

	<?php   

	include   'erro.php';    ?>

	<br><br>
<form method="POST"action="login.php"class="conatiner box">


	<h2 style="position:relative;left:130px;">Login</h2>

	

	

	 <div class="form-group">
	

 <div class="form-group">
<label style="position:relative;left:50px;top:10px;" id="exampleInput">Email:</label><br>
<input type="text" name="email"require="email"class="form-control" id="exampleInputPassword1"style="border-radius:20px;width:250px;position:relative;left:50px;top:10px;"></input><br>

</div>

<div class="form-group">
<label style="position:relative;left:50px;top:10px;" id="exampleInput">Password:</label><br>
<input type="password" name="password"require="email"class="form-control" id="exampleInputPassword1"style="border-radius:20px;width:250px;position:relative;left:50px;top:10px;"></input><br>

</div>
 <div class="form-group">
<button type="submit" name="login" class="btn btn-primary"style="border-radius:20px;position:relative;left:110px;top:10px;width:100px;">Login</button>


</div>

<p style="position:relative;left:50px;top:20px;">Not yet a member?

<a href="index.php"style="position:relative;left:10px;">Sign up</a></p>

</form>
</body>
</html>