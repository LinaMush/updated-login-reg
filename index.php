<?php
  
include("connect.php");
  
if(isset($_POST['submit'])) {
    $query = mysqli_query($conn,
    "INSERT INTO REGISTER SET name='"
    . $_POST["name"] . "'  ,Email ='"
    . $_POST["Email"] . "'   ,Passowrd ='"
    . $_POST["Passowrd"] . "'    ,PassowrdCon     ='"
    . $_POST["PassowrdCon"] . "'        ");
      
?>
<script>
    alert('You Registered Successfully, Login now');
</script>
<?php
}
?>
<html> 
<head>
	<meta charset="utf-8">
	<title> Regester </title>
	<link rel="stylesheet" type="text/css" href="Log in.css">
</head>
<body>
	<div class="center">
		<div class="card">
			<div class="innerBox">
				<div class="card-front">
					<h2> Regester </h2>
					<div class="line"> </div>
						<form method="post" action="index.php">
						
							<p><label for="name"> <strong> Name: &nbsp </strong> </label>
								<input id="name" name="name" class="input" type="text" placeholder="Enter your full name" required>* </p>

							<p><label for="Email"> <strong> E-mail: &nbsp </strong> </label>
								<input id="Email" name="Email" class="input" type="email" placeholder="name@domain.com" required>* </p>

							<p>	<label for="Passowrd"> <strong> Password:  &nbsp </strong>  </label>
								<input id="Passowrd" name="Passowrd" class="input" type="password" required>* </p>
								
							<p>	<label for="ConPassowrd"> <strong> Confirm Password:  &nbsp </strong>  </label>
								<input id="PassowrdCon" name="PassowrdCon" class="input" type="password" required>* </p>
								
							<p> <input id="remember" name="remember"  name="remember" type="checkbox" value="remember"> 
								<label id="remember"> Remember me </label> 	</p>		
							
								<p><button type="submit" name="submit" class="button" formnovalidate> <strong> Regester</strong></button>	</p>
								
						</form>		
						<div class="line"> </div>
							<p> <button class="button" onclick="Login()" formnovalidate> <strong> you have an account </strong> </button></p>	
						
				</div>
			</div>	
		</div>
	</div>
	
	<script>
		function Login(){
			window.location="Log in form.html";
		}
	</script>
</body>
</html>