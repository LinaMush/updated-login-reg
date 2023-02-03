<?php

    
include("connect.php");
 
if(isset($_POST['login'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM zencustmers WHERE Email='"
    . $_POST["Email"] . "' AND
    password='" . $_POST["Passowrd"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:HomePage.html");
        exit();
    }
    else {
?>
<hr>
<font color="red"><b>
        <h3>Sorry Invalid Username and Password<br>
            Please Enter Correct Credentials</br></h3>
    </b>
</font>
<hr>
 
<?php
      }
}
?>
<html> 
<head>
	<meta charset="utf-8">
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="Log in.css">
</head>
<body>
	<div class="center">
		<div class="card">
			<div class="innerBox">
				<div class="card-front">
					<h2> Login </h2>
					<div class="line"> </div>
						<form method="post" action="Log In.php">

							<p><label for="Email"> <strong> E-mail: &nbsp </strong> </label>
								<input id="Email" name="Email" class="input" type="email" placeholder="name@domain.com" required>* </p>

							<p>	<label for="Passowrd"> <strong> Password:  &nbsp </strong>  </label>
								<input id="Passowrd" name="Passowrd" class="input" type="password" required>* </p>
								
							<p> <input id="remember"  name="remember" type="checkbox" value="remember"> 
								<label id="remember"> Remember me </label> 	</p>
					
							<p> <a href="" target="_blank"> Forgot your password? </a>	</p>				
							
								<p><button type="submit" name="login" class="button" formnovalidate> <strong> Login</strong></button>	</p>
								
						</form>		
						<div class="padding"> </div>
						<div class="line"> </div>
							<p> <button class="button" onclick="Regester()" formnovalidate> <strong> New here? </strong> </button></p>	
						
				</div>
			</div>	
		</div>
	</div>
	
	<script>
		function Regester(){
			window.location="index.php";
		}	
	</script>
</body>
</html>
