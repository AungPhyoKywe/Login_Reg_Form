
<?php include 'dbconnect.php' ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style> 

body {background-color: #E6E6FA;}

</style>
</head>
<body>

	


<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="reg.png"width="30px"height="30px"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
   <input id="blah"type="image" src="you.png" width="30px"height="30px"/>
<input type="file" onchange="readURL(this);" style="display: none;" />
    </li>
    
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" href="login.php">Sing Out</i></a>
    </li>
    
  </ul>

</nav>


	




	

	<div class="container"> 
		

<br><br>
		<center><h2> <b><i>Welcome form Registration list </i></b> </h2><br></center>


		<p>Welcome<strong><?php echo $_SESSION['firstname'].$_SESSION['lastname']; ?></strong></p>


		


		

		<br>

		
		<table class="table table-bordered"id="myTable">
      <thead class="thead-dark">
    <tr>
     <th scope="col"style="width:100px;">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col"style="width:700px;">Email Address</th>
      
    </tr>

   
  


<?php 




$s = "SELECT * FROM persons";


     $result = $db->query($s);

     if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$id=$row['ID'];

        ?>

<table class="table table-striped">
  
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['ID'];?></th>
      <td ><?php echo $row['firstname'].$row['lastname'];?></td>
      <td style="width:700px;"><?php echo $row['email'];?></td>
      <td ><a href="web.php?delete=<?php echo $id;  ?>"onclick="return confirm('Are you sure want to delete?');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      
    </tr>
    
  </tbody>
</table>





 <?php       
    }

}
if (isset($_GET['delete'])) {

	$delete_id=$_GET['delete'];


	mysqli_query($db,"DELETE FROM persons WHERE ID='$delete_id' ");

}
	# code...



 ?>














	</div>

<div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>	

</body>
</html>