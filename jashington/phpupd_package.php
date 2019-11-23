<?php
	session_start();
	$id = $_GET['id'];
	$packagename=$_POST['packagename'];
	$packageprice=$_POST['packageprice'];
	
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
    {
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

    $sql = "update `package` set `packagename`='$packagename', `packageprice`='$packageprice' where `packagecode`='$id'";
	
	$result = mysqli_query($dbc, $sql);

	if (false === $result) 
      {
         echo mysqli_error();
	  }

	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("PACKAGE DETAILS UPDATED");</script>'; 
			Print '<script>window.location.assign("phplist_package.php?custid=");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("UPDATE FAILED");</script>'; 
			Print '<script>window.location.assign("phplist_package.php?custid=");</script>'; 		
		}
?>