<?php
	session_start();
	$id = $_GET['id'];
	$invoicedate=$_POST['invoicedate'];
	$total=$_POST['total'];
	

	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
    {
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

    $sql = "update `invoice` set `invoicedate`='$invoicedate', `total`='$total' where `invoiceno`='$id'";
	
	$result = mysqli_query($dbc, $sql);

	if (false === $result) 
      {
         echo mysqli_error();
	  }

	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("INVOICE DETAILS UPDATED");</script>'; 
			Print '<script>window.location.assign("phplist_invoice.php?invoiceno=");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("UPDATE FAILED");</script>'; 
			Print '<script>window.location.assign("phplist_invoice.php?invoiceno=");</script>'; 		
		}
?>