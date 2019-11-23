<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>PACKAGE</title>
   
    <style type="text/css">
    body,td,th {
	color: #F3F;
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
}
body {
	background-image: url(water.jpg);
	background-color: #FFF;
	text-align :center;
}
    </style>

</head>
<link rel="stylesheet" href="style.css">
<body text="#000000">
<header>
        <nav class="site-nav"><a href="menu.php">MENU</a> </nav>
</header>
<center>
<p>PACKAGE INFORMATION</p>
      <p>&nbsp;</p>
    <form action="phpadd_package.php" method="post">
    
    <p>PACKAGE CODE <br/>
    <input type="text" name="packagecode" required/></p>
    
    
    <p> PACKAGE NAME <br/>
    <input type="text" name="packagename" required/></p>
    
    <p>PACKAGE PRICE<br/>
    <input type="text" name="packageprice" required/></p>
    
   
        
       
        
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
        
        <p>
        <text class="required"> </text><text class="form-attention">
    	</p>
    </form>

		<text class="form-attention">
		Copyright &copy; 2017 -champagnepapi
	</ul>

</body>
</html>