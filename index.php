<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
<style>
      body {
        font-family: 'Oswald', serif;
        font-size: 24px;
      }
    </style>
<h1> Application for Hello World </h1>
	<title>Application for Hello World</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content=""><meta name="author" content="">
</head>

<body>
<form action="action_page.php" method="get">
First name:<br />
<input name="firstname" type="text" required><br />
Last name:<br />
<input name="lastname" type="text" required><br />
Address:<br />
<input name="address1" type="text" required><br />
Address(cont.):<br />
<input name="address2" type="text" required><br />
City:<br />
<input name="city" type="text" required><br />
State:<br />
<input name="state" type="text" required><br />
Zip:<br />
<input name="zip"type="number" required><br />
Country:<br />
<input name="usrcountry" type="radio" value="United States" required>United States<br />
<input type="submit" value="Submit" /> <input type="reset" value="Reset" />
</form>

<!--
<form action="dataview.php">
<input type="submit" value="Database Viewing page"/>
</form>

-->


</body>
</html>