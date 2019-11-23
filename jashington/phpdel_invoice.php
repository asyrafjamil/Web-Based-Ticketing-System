<?php
	session_start();
	$id = $_GET['id'];
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
    {
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

    $sql = "delete from `invoice` where `invoiceno`='$id'";
	$result = mysqli_query($dbc, $sql);

	if (false === $result) 
      {
         echo mysqli_error();
	  }

	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("INVOICE DETAILS DELETED");</script>'; 
			Print '<script>window.location.assign("phplist_invoice.php?invoiceno=");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("DELETION FAILED");</script>'; 
			Print '<script>window.location.assign("phplist_invoice.php?invoiceno=");</script>'; 		
		}
?>