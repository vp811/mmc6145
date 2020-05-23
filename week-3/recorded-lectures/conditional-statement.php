<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Conditional Statements - Intro to PHP</title>
  </head>

  <body>
    <h1>Coding Conditional Statements</h1>
    <h2>Conditional Statements Intro</h2>
    <?php
      // if (condition) {
      //   // code...
      // }

      $age = 42;

      //Equal to
      if($age == 41){
        echo "<p>You are 41 years old</p>";
      }

      //Not equal to
      if($age != 33){
        echo "<p>You are not 33</p>";
      }

      //Less than
      if($age < 30){
        echo "<p>You are not in your 30s</p>";
      }

      //Greater than
      if($age > 30){
        echo "<p>You are in your 30s!</p>";
      }

      //Greater than equal to
      if($age >= 30){
        echo "<p>You are at least 30 years old</p>";
      }

      //Less than equal to
      if($age <= 29){
        echo "<p>You are not at least 30 years old</p>";
      }

      //Combining Operators
      if($age > 30 && $age < 40){
        echo "<p>You are in your 30s!</p>";
      }

      //OR
      $firstName = "Tony";
      $lastName = "Smith";

      if($firstName == "Tony" || $lastName == "Stark" ){
        echo "<p>Access Granted</p>";
      }

      //Combining Conditions
      $employee1 = "Jim";
      $employee2 = "Pam";
      $employee3 = "Michael";
      $employee4 = "Dwight";

      if(($employee1 == "Jim" || $employee2 == "Pam" || $employee3 = "Michael") && $employee4 =="Toby"){
        echo "<p>Sorry no Tobys allowed in this party</p>";
      }

      //Value in array check
      $employees = array(
        "Jim",
        "Pam",
        "Michael",
        "Dwight"
      );

      if(in_array("Toby",$employees)){
        echo "<p>Sorry no Tobys allowed in this party</p>";
      }

      //If/else statements
      $matchNumber = 42;

      if($matchNumber == 42){
        echo "<p>Your number is correct</p>";
      }else{
        echo "<p>Your number does not match</p>";
      }

      //if/elseif/else
      if($matchNumber == 42){
        echo "<p>Your number is correct</p>";
      }elseif($matchNumber > 40 && $matchNumber < 50){
        echo "<p>You are close but not there yet</p>";
      }else{
        echo "<p>Your number does not match</p>";
      }

      //Multidimensional Statement
      $rated = false;
      $rating = 22;

      if($rating < 0 || $rating > 10){
        echo "<p>This rating is not valid, please try again.</p>";
      }else{
        //User has already rated in the past
        if($rated){
          echo "<p>You are not allowed to rate twice</p>";
        }else{
          echo "<p>Thanks for rating!</p>";

          $rated = true;

          if($rating <= 6){
            echo "<p>We are sorry that you had a bad experience. Please contact us at 555-555-5555 with any concerns</p>";
          }else{
            echo "<p>Thank you for the great review!</p>";
          }
        }
      }

      //Switch statements
      $footballTeam = "Seminoles";

      switch ($footballTeam) {
        case "Gators":
          echo "<p>Go Gators!</p>";
          break;

        case "Seminoles":
          echo "<p>Gator Bait!</p>";
          echo "<p><img src='images/gator-bait.gif' alt='Tim Tebow' /></p>";
          break;

        case "Hurricanes":
          echo "<p>Welcome to the Swamp</p>";
          echo "<p><img src='images/gator-bait.gif' alt='Tim Tebow' /></p>";
          break;

        default:
          echo "<p>Pick the Gators!</p>";
          break;
      }

      //Switch Statement
      $date = date("m/d");

      switch ($date) {
        case "10/31":
          $customCSS = "<link rel='stylesheet' href='css/halloween.css' />";
          break;

        case "12/25":
          $customCSS = "<link rel='stylesheet' href='css/christmas.css' />";
          break;

        default:
          $customCSS = "<link rel='stylesheet' href='css/style.css' />";
          break;
      }

      echo $customCSS;

    ?>

    <p>This is the end of the document</p>

  </body>
</html>
