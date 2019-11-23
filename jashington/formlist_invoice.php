<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>INVOICE</title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico">
</head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="wrapper">
<div id="content">

<header>
        <nav class="site-nav"> </nav>
</header>

<center>
<div class="form">
    <div class="form-heading">SEARCH INVOICE INFORMATION</div>
    <form action="phplist_invoice.php" method="get">
    
        <label for="invoiceno"><span>INVOICE NO<span class="required"> *</span></span>
        <input name="invoiceno" type="text" class="input-field" id="invoiceno" value="" maxlength="10"/>
        </label>
        
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
        
        <text class="required">* </text><text class="form-attention">leave empty to list all</text>
    
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