<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Rate your Experience</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">

	</head>
	<body id="main_body" >
		<form class="password-field" method="post" action="form.php">
			<input type="password" name="form-password">
		</form>

		<?php
		if(isset($_POST['form-password']) && $_POST['form-password'] == "secretpassword"){?>
			<img id="top" src="images/top.png" alt="">
			<div id="form_container">

				<h1>Please Provide Your Feedback!</h1>
				<form id="sammple-form" class="testing-form" method="post" action="form-handler.php">
					<div class="form_description">
						<h2>Please Provide Your Feedback!</h2>
						<p>This is your form description. Click here to edit.</p>
					</div>

					<ul>
						<li id="name-field" >
							<label class="description" for="name">Name</label>
							<div>
								<input id="name" name="name" class="element text large" type="text" maxlength="255" value=""/>
							</div>
						</li>

						<li id="address-field">
							<label id="address" class="description" for="address">Address</label>

							<div>
								<input id="street-address" name="street-address" class="element text large" value="" type="text">
								<label for="street-address">Street Address</label>
							</div>

							<div>
								<input id="address-line-2" name="address-line-2" class="element text large" value="" type="text">
								<label for="address-line-2">Address Line 2</label>
							</div>

							<div class="left">
								<input id="city" name="city" class="element text medium" value="" type="text">
								<label for="city">City</label>
							</div>

							<div class="right">
								<input id="state" name="state" class="element text medium" value="" type="text">
								<label for="state">State / Province / Region</label>
							</div>

							<div class="left">
								<input id="zip-code" name="zip-code" class="element text medium" maxlength="15" value="" type="text">
								<label for="zip-code">Postal / Zip Code</label>
							</div>

							<div class="right">
								<select class="element select medium" name="country">
									<option value="" selected="selected"></option>
									<option value="Afghanistan" >Afghanistan</option>
									<option value="Albania" >Albania</option>
									<option value="Algeria" >Algeria</option>
									<option value="Andorra" >Andorra</option>
									<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
									<option value="Argentina" >Argentina</option>
									<option value="Armenia" >Armenia</option>
									<option value="Australia" >Australia</option>
									<option value="Austria" >Austria</option>
									<option value="Azerbaijan" >Azerbaijan</option>
									<option value="Bahamas" >Bahamas</option>
									<option value="Bahrain" >Bahrain</option>
									<option value="Bangladesh" >Bangladesh</option>
									<option value="Barbados" >Barbados</option>
									<option value="Belarus" >Belarus</option>
									<option value="Belgium" >Belgium</option>
									<option value="Belize" >Belize</option>
									<option value="Benin" >Benin</option>
									<option value="Bhutan" >Bhutan</option>
									<option value="Bolivia" >Bolivia</option>
									<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
									<option value="Botswana" >Botswana</option>
									<option value="Brazil" >Brazil</option>
									<option value="Brunei" >Brunei</option>
									<option value="Bulgaria" >Bulgaria</option>
									<option value="Burkina Faso" >Burkina Faso</option>
									<option value="Burundi" >Burundi</option>
									<option value="Cambodia" >Cambodia</option>
									<option value="Cameroon" >Cameroon</option>
									<option value="Canada" >Canada</option>
									<option value="Cape Verde" >Cape Verde</option>
									<option value="Central African Republic" >Central African Republic</option>
									<option value="Chad" >Chad</option>
									<option value="Chile" >Chile</option>
									<option value="China" >China</option>
									<option value="Colombia" >Colombia</option>
									<option value="Comoros" >Comoros</option>
									<option value="Congo" >Congo</option>
									<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
									<option value="Costa Rica" >Costa Rica</option>
									<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
									<option value="Croatia" >Croatia</option>
									<option value="Cuba" >Cuba</option>
									<option value="Cyprus" >Cyprus</option>
									<option value="Czech Republic" >Czech Republic</option>
									<option value="Denmark" >Denmark</option>
									<option value="Djibouti" >Djibouti</option>
									<option value="Dominica" >Dominica</option>
									<option value="Dominican Republic" >Dominican Republic</option>
									<option value="East Timor" >East Timor</option>
									<option value="Ecuador" >Ecuador</option>
									<option value="Egypt" >Egypt</option>
									<option value="El Salvador" >El Salvador</option>
									<option value="Equatorial Guinea" >Equatorial Guinea</option>
									<option value="Eritrea" >Eritrea</option>
									<option value="Estonia" >Estonia</option>
									<option value="Ethiopia" >Ethiopia</option>
									<option value="Fiji" >Fiji</option>
									<option value="Finland" >Finland</option>
									<option value="France" >France</option>
									<option value="Gabon" >Gabon</option>
									<option value="Gambia" >Gambia</option>
									<option value="Georgia" >Georgia</option>
									<option value="Germany" >Germany</option>
									<option value="Ghana" >Ghana</option>
									<option value="Greece" >Greece</option>
									<option value="Grenada" >Grenada</option>
									<option value="Guatemala" >Guatemala</option>
									<option value="Guinea" >Guinea</option>
									<option value="Guinea-Bissau" >Guinea-Bissau</option>
									<option value="Guyana" >Guyana</option>
									<option value="Haiti" >Haiti</option>
									<option value="Honduras" >Honduras</option>
									<option value="Hong Kong" >Hong Kong</option>
									<option value="Hungary" >Hungary</option>
									<option value="Iceland" >Iceland</option>
									<option value="India" >India</option>
									<option value="Indonesia" >Indonesia</option>
									<option value="Iran" >Iran</option>
									<option value="Iraq" >Iraq</option>
									<option value="Ireland" >Ireland</option>
									<option value="Israel" >Israel</option>
									<option value="Italy" >Italy</option>
									<option value="Jamaica" >Jamaica</option>
									<option value="Japan" >Japan</option>
									<option value="Jordan" >Jordan</option>
									<option value="Kazakhstan" >Kazakhstan</option>
									<option value="Kenya" >Kenya</option>
									<option value="Kiribati" >Kiribati</option>
									<option value="North Korea" >North Korea</option>
									<option value="South Korea" >South Korea</option>
									<option value="Kuwait" >Kuwait</option>
									<option value="Kyrgyzstan" >Kyrgyzstan</option>
									<option value="Laos" >Laos</option>
									<option value="Latvia" >Latvia</option>
									<option value="Lebanon" >Lebanon</option>
									<option value="Lesotho" >Lesotho</option>
									<option value="Liberia" >Liberia</option>
									<option value="Libya" >Libya</option>
									<option value="Liechtenstein" >Liechtenstein</option>
									<option value="Lithuania" >Lithuania</option>
									<option value="Luxembourg" >Luxembourg</option>
									<option value="Macedonia" >Macedonia</option>
									<option value="Madagascar" >Madagascar</option>
									<option value="Malawi" >Malawi</option>
									<option value="Malaysia" >Malaysia</option>
									<option value="Maldives" >Maldives</option>
									<option value="Mali" >Mali</option>
									<option value="Malta" >Malta</option>
									<option value="Marshall Islands" >Marshall Islands</option>
									<option value="Mauritania" >Mauritania</option>
									<option value="Mauritius" >Mauritius</option>
									<option value="Mexico" >Mexico</option>
									<option value="Micronesia" >Micronesia</option>
									<option value="Moldova" >Moldova</option>
									<option value="Monaco" >Monaco</option>
									<option value="Mongolia" >Mongolia</option>
									<option value="Montenegro" >Montenegro</option>
									<option value="Morocco" >Morocco</option>
									<option value="Mozambique" >Mozambique</option>
									<option value="Myanmar" >Myanmar</option>
									<option value="Namibia" >Namibia</option>
									<option value="Nauru" >Nauru</option>
									<option value="Nepal" >Nepal</option>
									<option value="Netherlands" >Netherlands</option>
									<option value="New Zealand" >New Zealand</option>
									<option value="Nicaragua" >Nicaragua</option>
									<option value="Niger" >Niger</option>
									<option value="Nigeria" >Nigeria</option>
									<option value="Norway" >Norway</option>
									<option value="Oman" >Oman</option>
									<option value="Pakistan" >Pakistan</option>
									<option value="Palau" >Palau</option>
									<option value="Panama" >Panama</option>
									<option value="Papua New Guinea" >Papua New Guinea</option>
									<option value="Paraguay" >Paraguay</option>
									<option value="Peru" >Peru</option>
									<option value="Philippines" >Philippines</option>
									<option value="Poland" >Poland</option>
									<option value="Portugal" >Portugal</option>
									<option value="Puerto Rico" >Puerto Rico</option>
									<option value="Qatar" >Qatar</option>
									<option value="Romania" >Romania</option>
									<option value="Russia" >Russia</option>
									<option value="Rwanda" >Rwanda</option>
									<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
									<option value="Saint Lucia" >Saint Lucia</option>
									<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
									<option value="Samoa" >Samoa</option>
									<option value="San Marino" >San Marino</option>
									<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
									<option value="Saudi Arabia" >Saudi Arabia</option>
									<option value="Senegal" >Senegal</option>
									<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
									<option value="Seychelles" >Seychelles</option>
									<option value="Sierra Leone" >Sierra Leone</option>
									<option value="Singapore" >Singapore</option>
									<option value="Slovakia" >Slovakia</option>
									<option value="Slovenia" >Slovenia</option>
									<option value="Solomon Islands" >Solomon Islands</option>
									<option value="Somalia" >Somalia</option>
									<option value="South Africa" >South Africa</option>
									<option value="Spain" >Spain</option>
									<option value="Sri Lanka" >Sri Lanka</option>
									<option value="Sudan" >Sudan</option>
									<option value="Suriname" >Suriname</option>
									<option value="Swaziland" >Swaziland</option>
									<option value="Sweden" >Sweden</option>
									<option value="Switzerland" >Switzerland</option>
									<option value="Syria" >Syria</option>
									<option value="Taiwan" >Taiwan</option>
									<option value="Tajikistan" >Tajikistan</option>
									<option value="Tanzania" >Tanzania</option>
									<option value="Thailand" >Thailand</option>
									<option value="Togo" >Togo</option>
									<option value="Tonga" >Tonga</option>
									<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
									<option value="Tunisia" >Tunisia</option>
									<option value="Turkey" >Turkey</option>
									<option value="Turkmenistan" >Turkmenistan</option>
									<option value="Tuvalu" >Tuvalu</option>
									<option value="Uganda" >Uganda</option>
									<option value="Ukraine" >Ukraine</option>
									<option value="United Arab Emirates" >United Arab Emirates</option>
									<option value="United Kingdom" >United Kingdom</option>
									<option value="United States" >United States</option>
									<option value="Uruguay" >Uruguay</option>
									<option value="Uzbekistan" >Uzbekistan</option>
									<option value="Vanuatu" >Vanuatu</option>
									<option value="Vatican City" >Vatican City</option>
									<option value="Venezuela" >Venezuela</option>
									<option value="Vietnam" >Vietnam</option>
									<option value="Yemen" >Yemen</option>
									<option value="Zambia" >Zambia</option>
									<option value="Zimbabwe" >Zimbabwe</option>
								</select>
							<label for="country">Country</label>
						</div>
					</li>

					<li id="phone-field">
						<label class="description">Phone</label>
						<span>
							<input id="phone-number" name="phone-number" class="element text" size="10" maxlength="10" value="" type="text">
							<label for="phone-number">(###)###-####</label>
						</span>
					</li>

					<li id="email-field" >
						<label class="description">Email </label>
						<div>
							<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/>
						</div>
					</li>

					<li id="visit-date-field" >
						<label class="description">When did you visit? </label>
						<span>
							<input id="visit-date" name="visit-date" class="element text" value="" type="date">
							<label for="visit-date">Date</label>
						</span>

					</li>

					<li id="visit-rating-field" >
						<label class="description">How would you rate your experience? </label>
						<span>
							<input id="visit-rating-1" name="visit-raiting-1" class="element radio" type="radio" value="1" />
							<label class="choice" for="visit-raiting-1">1</label>

							<input id="visit-rating-2" name="visit-raiting-2" class="element radio" type="radio" value="2" />
							<label class="choice" for="visit-raiting-2">2</label>

							<input id="visit-rating-3" name="visit-raiting-3" class="element radio" type="radio" value="3" />
							<label class="choice" for="visit-raiting-3">3</label>

							<input id="visit-rating-4" name="visit-raiting-4" class="element radio" type="radio" value="4" />
							<label class="choice" for="visit-raiting-4">4</label>

							<input id="visit-rating-5" name="visit-raiting-5" class="element radio" type="radio" value="5" />
							<label class="choice" for="visit-raiting-5">5</label>

							<input id="visit-rating-6" name="visit-raiting-6" class="element radio" type="radio" value="6" />
							<label class="choice" for="visit-raiting-6">6</label>

							<input id="visit-rating-7" name="visit-raiting-7" class="element radio" type="radio" value="7" />
							<label class="choice" for="visit-raiting-7">7</label>

							<input id="visit-rating-8" name="visit-raiting-8" class="element radio" type="radio" value="8" />
							<label class="choice" for="visit-raiting-8">8</label>

							<input id="visit-rating-9" name="visit-raiting-9" class="element radio" type="radio" value="9" />
							<label class="choice" for="visit-raiting-9">9</label>

							<input id="visit-rating-10" name="visit-raiting-10" class="element radio" type="radio" value="10" />
							<label class="choice" for="visit-raiting-10">10</label>
						</span>
					</li>

					<li id="contact-field" >
						<label class="description">How would you like to be contacted? </label>
						<span>
							<input type='checkbox' name='contactPreference[]' value='Phone'>Phone<br>
							<input type='checkbox' name='contactPreference[]' value='Email'>Email<br>
							<input type='checkbox' name='contactPreference[]' value='Both'>Both<br>
						</span>
					</li>

					<li id="comments">
						<label class="description" for="comments">Do you have any comments you would like to leave?</label>
						<textarea id="comments" name="comments" rows="6" cols="50"></textarea>
					</li>

					<li class="submit">
						<input id="submit" class="button_text" type="submit" name="submit" value="Submit" />
					</li>

				</ul>
			</form>
			</div>
		<?php }elseif(isset($_POST['form-password']) && $_POST['form-password'] != "secretpassword" ){
			echo "<p style='color: red; font-style: bold;'>WRONG PASSWORD!</p>";
		} ?>
	</body>
</html>
