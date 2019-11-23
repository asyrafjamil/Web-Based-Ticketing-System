<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>UPDATE CUSTOMER</title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico">
</head>
<link rel="stylesheet" href="style.css">
<body>

<div id="wrapper">
<div id="content">

<header>
        <nav class="site-nav"></nav>
</header>

<?php
	session_start();
    $id = $_GET['id'];
	
	$dbname = "jashington1";
    $dbc = mysqli_connect ("localhost","root","1234",$dbname);

    if (mysqli_connect_error())
    {
    	echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}

    $sql = "select * from `invoice` where `invoiceno` like '%$id%'";
	$result = mysqli_query($dbc, $sql);

// to display the details error
	if (false === $result) 
      {
         echo mysqli_error();
      }
    $row = mysqli_fetch_assoc($result)  	  
?>

<center>
<div class="form">
    <div class="form-heading">UPDATE INVOICE DETAILS</div>
    <form action="phpupd_invoice.php?id=<?php echo $id;?>" method="post">
    
    <fieldset disabled>
   <label for="invoiceno"><span>INVOICE NO</span></span>
            <input type="text" class="input-field" name="invoiceno" value='<?=$row['invoiceno'];?>' id="invoiceno" />
          </label>
    </fieldset>
        
        <p>
          <label for="invoicedate"><span>INVOICE DATE<span class="required"> *</span></span>
            <input type="date" required class="input-field" name="invoicedate" value='<?=$row['invoicedate'];?>' id="invoicedate" />
            <br>
            <br>
          </label>
          
           <label for="total"><span>Total</span></span>
            <input type="text" class="input-field" name="total" value='<?=$row['total'];?>' id="total" />
          </label>
                    
            
          
          
           
          <input type="submit" value="Update" />
          <input type="reset" value="Reset" />
        </p>
<text class="required">* </text><text class="form-attention">required</text>
    
    </form>
</div>
</center>

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