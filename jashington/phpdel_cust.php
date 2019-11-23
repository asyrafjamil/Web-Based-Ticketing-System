<?php
	session_start();
	$id = $_GET['id'];
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
    {
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

    $sql = "delete from `customer` where `custid`='$id'";
	$result = mysqli_query($dbc, $sql);

	if (false === $result) 
      {
         echo mysqli_error();
	  }

	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("CUSTOMER DETAILS DELETED");</script>'; 
			Print '<script>window.location.assign("phplist_cust.php?custid=");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("DELETION FAILED");</script>'; 
			Print '<script>window.location.assign("phplist_cust.php?custid=");</script>'; 		
		}
?>