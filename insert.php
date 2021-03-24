<?php 
session_start();
if(!$_SESSION['name'])
{
header("location:login1.php");
}

include 'conn.php';
$conn=mysqli_connect('localhost','root','','mini');
if(isset($_POST['done']))
{
	$name  = ucfirst($_POST['user']);
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	$department = ucfirst($_POST['department']);
    $date_of_birth = $_POST['date_of_birth'];
    
	
	$date_of_join = $_POST['date_of_join'];
    


	$q="INSERT INTO `employee`( `name`, `age`, `salary`, `date_of-birth`, `date_of_join`, `department`) VALUES ('$name','$age','$salary','$date_of_birth','$date_of_join','$department')";

$query = mysqli_query($conn,$q);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>

<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Insert Employee Details</h1>
			</div><br>


			<label>Name</label>
			<input type="text" name="user" class="form-control" required><br>

			<label>age</label>
			<input type="text" name="age" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>salary</label>
			<input type="text" name="salary" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

			<label>Department</label>
			<input type="text" name="department" class="form-control" required><br>

            <label>date of Birth</label>
            <div class="row" align="center">
			<div class="col-md-3" align="center"><input type="date" name="date_of_birth" class="form-control" placeholder="date" required pattern="[0-9]{1,2}" title="this field accepts only numbers  and two characters"></div>
<br>
			
            </div>
<br>
			<label>date of Joining</label>
			<div class="row" align="center">
			<div class="col-md-3" align="center"><input align="center" type="date" name="date_of_join" class="form-control" placeholder="date" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>
            </div> <br>
          <div  class="row m-auto">
			<div class="col-md-5"><a href="insert.php"><button class="btn btn-success col-lg-12" name="done">Add</button></a>
			</div>
			<div class="col-md-5"><a href="display.php"><input type="button" name="" value="Back to records" class="btn btn-danger col-lg-12"></a></div>
			</div>
		   </div>
	</form>
</div>
</script>
</body>
</html>