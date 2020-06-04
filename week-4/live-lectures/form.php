<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>About You</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">

	</head>
	<body id="main_body" >
		<div class="container">
			<h1>Tell me about yourself</h1>
			<form id="sample-form" class="testing-form" method="post" action="form-handler.php">
				<fieldset>
					<legend>User information</legend>

					<ul>
						<li>
							<label for="name">Name:</label>
							<input type="text" id="name" name="name">
						</li>

						<li>
							<label for="address">Address:</label>
							<input type="text" id="address" name="address">
						</li>

						<li>
							<label for="phone">Phone:</label>
							<input type="tel" id="phone" name="phone">
						</li>

						<li>
							<label for="email">Email:</label>
							<input type="email" id="email" name="email">
						</li>

						<li>
							<label for="birthday">Birthday:</label>
							<input type="date" id="birthday" name="birthday">
						</li>

						<li>
							<label for="website">Website:</label>
							<input type="url" id="website" name="website">
						</li>
					</ul>
				</fieldset>

				<fieldset>
					<legend>Other information:</legend>
						<ul>
							<li>
								<label for="fav-show">Do you like The Office?</label>
								<select id="fav-show" name="fav-show">
									<option value="Yes">Yes</option>
									<option value="No">No</option>
									<option value="Never Watched">Never Watched it</option>
								</select>
							</li>

							<li>
								<label for="password">What is the secret password?</label>
								<input type="password" id="password" name="password" >
							</li>
						</ul>
				</fieldset>

				<input type="submit" value="Submit" >
			</form>
		</div>
	</body>
</html>
