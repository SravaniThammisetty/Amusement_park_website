<?php
session_start();
if(!$_SESSION['name'])
{
header("location:login1.php");
}

error_reporting(0);
include 'conn.php';
$conn=mysqli_connect('localhost','root','','mini');
$name  = ucfirst($_POST['user']);
	$age = $_POST['age'];
	$salary = $_POST['salary'];
	$department = ucfirst($_POST['department']);
    $date_of_birth = $_POST['date_of_birth'];
    
	
	$date_of_join = $_POST['date_of_join'];


$day = $_POST['day'];
$hours = $_POST['t_in1'];
$min = $_POST['t_in2'];
$sec = $_POST['t_in3'];
$hours1 = $_POST['t_out1'];
$min1 = $_POST['t_out2'];
$sec1 = $_POST['t_out3'];
$timein = "$hours:$min:$sec";
$timeout = "$hours1:$min1:$sec1";
$date = date("d-m-y");

$q="select * from employee where staff_id = $staff_id";
$query = mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);

$q2="INSERT INTO attendance(staff_id,name, day, date,time_in, time_out) VALUES ('$staff_id','$name','$day','$date','$timein','$timeout')";

if (isset($_POST['add'])) 
{
	
	mysqli_query($conn,$q2);
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
				<h1 class="text-white text-center">Displaying Employee Details</h1>
			</div><br>

			<input type="hidden" name="id" value="<?php echo $res['staff_id']; ?>">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $_GET['cname']; ?>" ><br>

			<label>age</label>
			<input type="text" name="age" class="form-control" value="<?php echo $_GET['age']; ?>" readonly><br>

			<label>salary</label>
			<input type="text" name="salary" class="form-control" value="<?php echo $_GET['salary']; ?>" readonly><br>

			<label>qualification</label>
			<input type="text" name="qualification" class="form-control" value="<?php echo $_GET['department']; ?>" readonly><br>

            <label>date of Birth</label>
			<input type="text" name="dob" class="form-control"
			value="<?php echo $_GET['date_of-birth']; ?>" readonly><br>

			<label>date of Joining</label>
			<input type="text" name="doj" class="form-control" value="<?php echo $_GET['date_of_join']; ?>" readonly><br>

			<label>day</label>
			<select name="day" class="form-control">
				<option>monday</option>
				<option>tuesday</option>
				<option>wednesday</option>
				<option>thursday</option>
				<option>friday</option>
				<option>saturday</option>
			</select><br>

			<label>time in</label>
			<div class="row">
			<div class="col-md-3"><input type="text" name="t_in1" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>:
			<div class="col-md-3"><input type="text" name="t_in2" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>:
			<div class="col-md-3"><input type="text" name="t_in3" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>
		    </div>
			<br>

			<label>time out</label>
			<div class="row">
			<div class="col-md-3"><input type="text" name="t_out1" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>:
			<div class="col-md-3"><input type="text" name="t_out2" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>:
			<div class="col-md-3"><input type="text" name="t_out3" class="form-control" value="0" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers and two characters"></div>
		    </div><br>
            
            <div class="row">
			<div class="col-md-3"><button class="btn btn-success" name="Back">Back</button></div>
			<div class="col-md-3"><button class="btn btn-success" name="add">add</button></div>
			<div class="col-md-3"><button class="btn btn-success" name="view">attendance</button></div>
		    </div>
		   <script type="text/javascript">

</script>
		<?php
        
        if(isset($_POST['Back']))
        {
            header("location:display.php");
        }

if (isset($_POST['view'])) {

$_SESSION['id'] = $Staff_id;
	header("location:attendance.html");

}
		?>
		</div>
		
	</form>
</div>

</body>
</html>