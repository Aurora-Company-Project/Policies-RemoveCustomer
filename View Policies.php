<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Policies</title>
	<link href= "CSS/Policiess.css"type="text/css" rel="stylesheet">
	<link href= "CSS/View policies.css" type="text/css" rel="stylesheet">
</head>

<body>
	<div class="Heading">
		<h1>View Policies<h1>
	</div>	
	<div class="link">	
		<a href="Other link" target="_blank">Current Regulations and policies</a>
	</div>	
	
	<div class="Rates">
		<form action="View Policies.php" method="post">
			<label>Current Asset tax rate:</label>
			<output type="text" id="asset rate" name="Asset rate">7%</output></br>
			<label>Current rental tax rate:</label>
			<output type="text" id="rental rate" name="Rental rate">10%</output></br>
		</form>
		
	</div>
	<div class="bttn_control">
		<button id="Btn" type="submit" name="Update Policies">Update Policies</button>
	</div>
</body>
</html>