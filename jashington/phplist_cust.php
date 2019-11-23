<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>CUSTOMER LIST</title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico">
</head>
<link rel="stylesheet" href="style.css">
<body>

<div id="wrapper">
<div id="content">

<header>
        <nav class="site-nav"> </nav>
</header>

<table  class="table" align="center" >
      <tr>
        <th>ID</th>
        <th>NAME</th> 
        <th>PHONE NUM</th> 
        <th>CREDIT CARD</th>
             
      </tr>

    <?php
    session_start();
    $custid = $_GET['custid'];
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

    $sql = "select * from `customer` where `custid` like '%$custid%'";
     
    $result = mysqli_query($dbc, $sql);
    if (false === $result) 
      {
         echo mysqli_error();
      }
    while($row = mysqli_fetch_assoc($result))
	{
        Print '<tr>
                  <td>'.$row['custid'].'</td>  
				  <td>'.$row['custname'].'</td>
				  <td>'.$row['custphonenum'].'</td>
				  <td>'.$row['creditcard'].'</
                  <td><center>
                  <a href="formupd_cust.php?id='.$row['custid'].'" class="btn btn-warning" role="button">Update</a>
                  </center></td>
                  <td><center>
                  <a href="formdel_cust.php?id='.$row['custid'].'" class="btn btn-danger" role="button">Delete</a>
                  </center></td>
               </tr>';
      }

    ?>
</table>

</div><!--content-->
<div id="footer">
<nav class="site-nav">
	<ul>
		<text class="form-attention">
		Copyright &copy; 2017 - champagnepapi
	</ul>
</nav>
</div>
</div><!--wrapper-->

</body>
</html>