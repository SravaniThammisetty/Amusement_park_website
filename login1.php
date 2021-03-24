<?php
error_reporting(0);
session_start();
include "conn.php";

$name = $_POST['name'];
$Password = $_POST['pass'];

    
	
if (isset($_POST['Login'])) 
{


	$q= "select * from front where name = '$name' and password = '$Password'";
	$conn=mysqli_connect('localhost','root','','mini');
	$res = mysqli_query($conn,$q);
	if($res)
	{
		echo"ll";
	}
	$res1 = mysqli_num_rows($res);
    if($conn)
	{
		
	
    if ($res1 == 0) 
    {
          header("location:login.php?user=Incorrect username or Password");		
	}	
	else{
    while ($row = mysqli_fetch_array($res)) {

    	if ($row['name'] == $name  &&  $row['password'] == $Password)
    	 {
    	 	$_SESSION['name'] = $name ;
    		$_SESSION['password'] = $Password ;
			header("location:display.html");
            header("location:display.php");
			
			
    		/*if ($row['type'] == 'admin') 
			{
    			
    			header("location:display.php");
    			
    		}

    		elseif ($row['type'] == 'hr') 
    		{
    			header("location:displayhr.php");
            }*/
			

    	}

    	
    }

}

}
}

?>