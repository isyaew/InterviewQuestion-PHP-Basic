<!DOCTYPE html>
<html>
<head>
	<title>Username Verification</title>	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="verify_ajax.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        #message {
            color: green;
        }
    </style>
</head>
<body>
	<p>User Name:</p> <form id="usernameForm">
		<input type="text" id="username" name="username">
		<button type="submit" id="submitBtn" style="background-color: green; color: white;">Submit</button>
        <p id="message">Key in username and click submit</p>
	</form>
	<div id="message"></div>
</body>
</html>
