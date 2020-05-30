<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Rate your Experience</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">

	</head>

	<body>
    <?php
    $_POST;

		$name = $_POST['name'];
    $streetAddress = $_POST['street-address'];
		$streetAddress2 = $_POST['address-line-2'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zipCode = $_POST['zip-code'];
		$country = $_POST['country'];
		$phone = $_POST['phone-number'];
		$email = $_POST['email'];
		$visitDate = $_POST['visit-date'];

		for ($i = 1; $i <= 10; $i++) {
			if(!empty($_POST['visit-raiting-' . $i])){
    		$visitRating = $_POST['visit-raiting-' . $i];
			}
		}

		$contactPhone = $_POST['contact-phone'];
		$contactEmail = $_POST['contact-email'];
		$contactBoth = $_POST['contact-both'];
		$uploadFile = $_POST['upload-file'];

		if(!empty($_POST['check'])) {
    foreach($_POST['check'] as $check) {
        echo $check;
    	}
		}
		echo $name . "<br />";
		echo $streetAddress . "<br />";
		echo $streetAddress2 . "<br />";
		echo $city  . "<br />";
		echo $state . "<br />";
		echo $zipCode . "<br />";
		echo $country  . "<br />";
		echo $phone . "<br />";
		echo $email . "<br />";
		echo $visitDate . "<br />";
		echo $visitRating . "<br />";
		echo $contactPhone . "<br />";
		echo $contactEmail . "<br />";
		echo $contactBoth . "<br />";
		echo $uploadFile . "<br />";
    ?>

	</body>
</html>
