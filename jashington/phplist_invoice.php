<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>INVOICE LIST</title>
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
        <th>INVOICE NO</th>
        <th>INVOICE DATE</th> 
        <th>TOTAL</th> 
        
             
      </tr>

    <?php
    session_start();
    $invoiceno = $_GET['invoiceno'];
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","",$dbname);

    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

    $sql = "select * from `invoice` where `invoiceno` like '%$invoiceno%'";
     
    $result = mysqli_query($dbc, $sql);
    if (false === $result) 
      {
         echo mysqli_error();
      }
    while($row = mysqli_fetch_assoc($result))
	{
        Print '<tr>
                  <td>'.$row['invoiceno'].'</td>  
				  <td>'.$row['invoicedate'].'</td>
				  <td>'.$row['total'].'</td>
                  <td><center>
                  <a href="formupd_invoice.php?id='.$row['invoiceno'].'" class="btn btn-warning" role="button">Update</a>
                  </center></td>
                  <td><center>
                  <a href="formdel_invoice.php?id='.$row['invoiceno'].'" class="btn btn-danger" role="button">Delete</a>
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
		Copyright &copy; 2017 -
	champagnepapi
	</ul>
</nav>
</div>
</div><!--wrapper-->

</body>
</html>