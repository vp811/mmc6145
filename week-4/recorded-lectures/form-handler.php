<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Rate your Experience</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">

	</head>

	<body>
		<?php
			$name 						= $_POST['name'];
			$streetAddresss 	= $_POST['street-address'];
			$streetAddresss2 	= $_POST['address-line-2'];
			$city 						= $_POST['city'];
			$state 						= $_POST['state'];
			$zipCode 					= $_POST['zip-code'];
			$country 					= $_POST['country'];
			$phone 						= $_POST['phone-number'];
			$email 						= $_POST['email'];
			$visitDate 				= $_POST['visit-date'];
			$comments 				= $_POST['comments'];

			//Rating For Loop
			for($i = 1; $i <= 10; $i++){
				if(!empty($_POST['visit-raiting-' . $i])){
					$visitRating = $_POST['visit-raiting-' . $i];
				}
			}

			// $visitRating1 = $_POST['visitor-raiting-1'];
			// $visitRating2 = $_POST['visitor-raiting-2'];
			// $visitRating3 = $_POST['visitor-raiting-3'];
			// $visitRating4 = $_POST['visitor-raiting-4'];
			// $visitRating5 = $_POST['visitor-raiting-5'];
			// $visitRating6 = $_POST['visitor-raiting-6'];
			// $visitRating7 = $_POST['visitor-raiting-7'];
			// $visitRating8 = $_POST['visitor-raiting-8'];
			// $visitRating9 = $_POST['visitor-raiting-9'];
			// $visitRating10 = $_POST['visitor-raiting-10'];

			//Display Name
			if(!empty($name)){
				echo "<h2>Your Name:</h2>";
				echo "<p>$name</p>";
			}

			//Address
			if(!empty($streetAddresss) || !empty($city) || !empty($state) || !empty($country)){?>
				<h2>Your Address:</h2>
				<p><?php echo $streetAddresss; ?></p>
				<p><?php echo "$city, $state $zipCode"; ?></p>
				<p><?php echo $country; ?></p><?php
 			}else{
				echo "<p>Please fill out your address information</p>";
			}

			//Phone and Email
			if(!empty($phone) || !empty($email)){?>
				<h2>Contact Information:</h2>
				<ul>
					<li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
					<li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
				</ul><?php
			}

			//Visit Date
			$visitDateFormatted = strtotime($visitDate);
			$currentTime = time();

			if(!empty($visitDate) && ($visitDateFormatted < $currentTime)){?>
				<h2>You visited us on:</h2>
				<p><?php echo $visitDate; ?></p><?php
			}elseif(!empty($visitDate) && ($visitDateFormatted > $currentTime)){?>
				<h2>You visited us on:</h2>
				<p>Sorry, the date you provided was from the future. Please try again.</p><?php
			}

			//Rating
			if($visitRating < 0 || $visitRating > 10){
				echo "<p>This rating is not valid, please try again.</p>";
			}else{
				echo "<h2>Thanks for rating!</h2>";

				if($visitRating <= 6){
					echo "<p>We are sorry that you had a bad experience. Please contact us at <a href='tel:555-555-5555'>555-555-5555</a> with any concerns</p>";
				}else{
					echo "<p>Thank you for the great review!</p>";
				}
			}

			//Contact Preferences
			if(!empty($_POST['contactPreference'])){?>
				<h2>We will contact you by:</h2>
				<?php
				foreach($_POST['contactPreference'] as $value){
					echo $value . ' ';
				}
			}

			//Comments
			if(!empty($comments)){?>
				<h2>Comments:</h2>
				<?php echo $comments;
			}

		?>
	</body>
</html>
