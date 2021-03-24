<?php
$con=mysqli_connect("localhost","root","","mini");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM employee");

?>


<html>  
 <head>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>
  .container{
	  margin-left: 220px; 
	  
  }
  body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: maroon;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 220px; 
  font-size: 28px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

		</style>
  
 </head>  
 <body>  


  <div class="container">  
   <br />  
   
   <br />  
   <div class="table-responsive">  
    
    <table class="table table-bordered">
     <tr>  
                         <th>Name</th>  
                         <th>age</th>  
                         <th>Salary</th> 
						 <th>department</th>
						 <th>DOB</th>
						 <th>DOJ</th>
						 <th>Delete</th> 
                         <th>Update</th>
   </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["age"].'</td>  
         <td>'.$row["salary"].'</td>  
         <td>'.$row["department"].'</td>
		 <td>'.$row["date_of-birth"].'</td>
		 <td>'.$row["date_of_join"].'</td>
		<td><a href="coursee.php? name='.$row["name"].'">DELETE</a></td>
		<td><a href="coursete.php? cname='.$row["Name"].' & cid='.$row["age"].' & fees='.$row["Salary"].' "> UPDATE </a></td>
<td><a href="coursee.php? name='.$row["name"].'">ATTENDANCE</a></td>
       </tr>  
        ';  
     }

     ?>
    </table>
    <br />
    
	
   </div>  
  </div>  
 </body>  
</html>