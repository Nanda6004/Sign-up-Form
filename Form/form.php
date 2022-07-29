
<!DOCTYPE html>
<html>
<head>
	<title>Sign-up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="form.php">
</head>
<body>
	<div class="bg-wrapper">
		<div class="wrapper">
			<div class="card">
				<div class="card-heading"></div>
				<div class="card-body">
					<h2 class="title">Registration Info</h2>
					<form action="signup.php" method="post">
						<div class="in">
							<input type="text" name="Name" placeholder="Name" required>
						</div>
						<div class="in">
							<input type="email" name="Email" placeholder="Email" required >
						</div>
						<div class="in">
							<input type="password" name="Password" id="Password" placeholder="Password" required >
						</div>
						<div class="in dob" >
							<input type="text" name="Birthdate" placeholder="Birthdate" onfocus ="(this.type='date')" onblur="(this.type='text')" required >
						</div>
						<div class="in">
							<label for="gender"></label>
								<select name="Gender" required >
									<option disabled="disabled" selected="selected">Gender</option>
									<option value="m">Male</option>
									<option value="f">Female</option>
									<option value="o">other</option>
								</select>
						</div>
						<div class="submit">
							<button type="submit" name="submit">Submit</button>		
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>