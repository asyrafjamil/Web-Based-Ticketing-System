<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>DELETE CUSTOMER</title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico">
</head>
<link rel="stylesheet" href="style.css">
<body>

<div id="wrapper">
<div id="content">

<header>
        <nav class="site-nav"> </nav>
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

    $sql = "select * from `customer` where `custid` like '%$id%'";
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
    <div class="form-heading">DELETE CUSTOMER DETAILS</div>
    <form action="phpdel_cust.php?id=<?php echo $id;?>" method="post">
    
    <fieldset disabled>
    <label for="custid"><span>ID<span class="required"> *</span></span><input name="custid" type="text" required class="input-field" id="custid" value='<?=$row['custid'];?>' maxlength="10" /></label>
        
        <label for="custname"><span>NAME<span class="required"></span></span>
        <input type="text" required class="input-field" name="custname" value='<?=$row['custname'];?>' id="custname" />
        </label>
        
        <label for="custphonenum"><span>Phone Num</span></span>
        <input type="text" class="input-field" name="custphonenum" value='<?=$row['custphonenum'];?>' id="custphonenum" />
        </label>
        
        <label for="creditcard"><span>Credit Card</span></span>
        <input type="text" class="input-field" name="creditcard" value='<?=$row['creditcard'];?>' id="creditcard" />
        </label>
        
        
        
		</fieldset>
        
        <input type="submit" value="Delete" onclick="return confirm('ARE YOU SURE ?')"/>
        
    </form>
</div>
</center>

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