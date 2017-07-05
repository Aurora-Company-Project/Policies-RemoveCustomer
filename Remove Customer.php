<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Customer Details</title>
	<link href="CSS/Policiess.css" type="text/css" rel="stylesheet">
	<link href= "CSS/Remove Customer.css" type="text/css" rel="stylesheet">
</head>

<body>
	<h1 id="Heading">Remove Customer Details</h1>
	<div>
		<form method="post">
			<div class="form_control">
				Customer Number: <input type="text" name="customer_no"/>
				<br/>
				Customer Address: <input type="text" name="address"/>
				<br/>
			</div>
			<div class="bttn_control">
				<button id="Btn" type="submit" name="viewCustomer">View Customer Details</button>
				<button id="Btn" type="submit" name="removeCustomer">Remove Customer</button>
			</div>
		</form>
	</div>
</body>
</html>