<?php
session_start();

$packagecode=$_POST['packagecode'];
$packagename=$_POST['packagename'];
$packageprice=$_POST['packageprice'];

$dbname = "jashington1";

$dbc=mysqli_connect("localhost","root","",$dbname);
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();
}

$sql= "insert into `package`(packagecode , packagename , packageprice) values ('$packagecode','$packagename','$packageprice') ";
$results= mysqli_query($dbc,$sql);
if (false === $results) 
      {
         echo "ERRORS : ".$sql."<br>".$conn->error;
      }
if ($results)
{
	mysqli_commit($dbc);
	print '<script>alert("NEW PACKAGE DETAILS HAS BEEN ADDED");</script>';
	print '<script>window.location.assign("menu.php");</script>';	
}
else
{
 	mysqli_rollback($dbc);
	print '<script>alert("INVALID DATA");</script>';
	print '<script>window.location.assign("formadd_package.php");</script>';
}	
?>