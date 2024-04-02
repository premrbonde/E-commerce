<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<title>Payment-Page</title> 
	<link rel="stylesheet" href="style.css"> 
</head> 
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap'); 

* { 
	margin: 0; 
	padding: 0; 
	box-sizing: border-box; 
	border: none; 
	outline: none; 
	font-family: 'Poppins', sans-serif; 
	text-transform: capitalize; 
	transition: all 0.2s linear; 
} 

.container { 
	display: flex; 
	justify-content: center; 
	align-items: center; 
	min-height: 100vh; 
	padding: 25px; 
} 

.container form { 
	width: 700px; 
	padding: 20px; 
	background: #fff; 
	box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2); 
} 

.container form .row { 
	display: flex; 
	flex-wrap: wrap; 
	gap: 15px; 
} 

.container form .row .col { 
	flex: 1 1 250px; 
} 

.col .title { 
	font-size: 20px; 
	color: rgb(237, 55, 23); 
	padding-bottom: 5px; 
} 

.col .inputBox { 
	margin: 15px 0; 
} 

.col .inputBox label { 
	margin-bottom: 10px; 
	display: block; 
} 

.col .inputBox input, 
.col .inputBox select { 
	width: 100%; 
	border: 1px solid #ccc; 
	padding: 10px 15px; 
	font-size: 15px; 
} 

.col .inputBox input:focus, 
.col .inputBox select:focus { 
	border: 1px solid #000; 
} 

.col .flex { 
	display: flex; 
	gap: 15px; 
} 

.col .flex .inputBox { 
	flex: 1 1; 
	margin-top: 5px; 
} 

.col .inputBox img { 
	height: 34px; 
	margin-top: 5px; 
	filter: drop-shadow(0 0 1px #000); 
} 

.container form .submit_btn { 
	width: 100%; 
	padding: 12px; 
	font-size: 17px; 
	background: rgb(1, 143, 34); 
	color: #fff; 
	margin-top: 5px; 
	cursor: pointer; 
	letter-spacing: 1px; 
} 

.container form .submit_btn:hover { 
	background: #3d17fb; 
} 

input::-webkit-inner-spin-button, 
input::-webkit-outer-spin-button { 
	display: none; 
}

</style>
<body> 
	<div class="container"> 
		<form action="paydada.php" method="post"> 
			<div class="row"> 
				<div class="col"> 
					<h3 class="title"> 
						Billing Address 
					</h3> 
					<div class="inputBox"> 
						<label for="name"> Full Name: </label> 
						<input type="text" id="name" name="username" placeholder="Enter your full name"required> 
					</div> 
					<div class="inputBox"> 
                        <label for="email"> Email:</label> 
						<input type="text" id="email" name="useremail" placeholder="Enter email address"required> 
					</div> 
					<div class="inputBox"> 
						<label for="address">Address:</label> 
						<input type="text" id="address" name="useraddress" placeholder="Enter address"required> 
					</div> 
					<div class="inputBox"> 
						<label for="city">City:</label> 
						<input type="text" id="city" name="usercity" placeholder="Enter city"required> 
					</div> 
					<div class="flex"> 
						<div class="inputBox"> 
							<label for="state">State:</label> 
							<input type="text" id="state" name="userstate" placeholder="Enter state"required> 
						</div> 
						<div class="inputBox"> 
							<label for="zip">Zip Code:</label> 
							<input type="number" id="zip" name="userzipcode" placeholder="123 456"required> 
						</div> 
					</div> 
				</div>  
			</div> 
            <input type="radio" id="cod" name="mode" value="cod" required>
            <label for="cod">COD</label ><br>
			<input type="submit" value="Proceed to Checkout"class="submit_btn"> 
		</form> 
	</div> 
</body> 
</html>
