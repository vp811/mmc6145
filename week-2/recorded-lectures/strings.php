<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Strings - Intro to PHP</title>
  </head>

  <body>
    <h1>Coding String</h1>
    <h2>Strings</h2>
    <?php
      //Double quote string
      echo "<p>This string has double quotes</p>";

      //Single quote string
      echo '<p>This string has single quotes</p>';

      //Variables string value
      $firstName = "Efren";
      $lastName  = "Vasquez";

      //echo $firstName;
      //echo $lastName;
      echo $firstName . $lastName . '<br />'; //Concatinating two variables
      echo $firstName . ' ' . $lastName . '<br />';

      //Combine string and variables
      $firstName = "Efren ";
      $lastName  = "Vasquez";
      $fullName  = $firstName . $lastName;
      //$fullName  = $firstName + $lastName; //Invalid

      echo $fullName . '<br />';

      echo "Hello my name is $fullName <br />";
      echo 'Hello my name is $fullName <br />';
      echo 'Hello my name is ' . $fullName . '<br />';
      echo 'Hello my first name is ' . $firstName . " and my last name is " . $lastName . '<br />';

      $employeeFirstName = "Michael";
      $employeeFullName  = $employeeFirstName . " Jordan";
      echo $employeeFullName . '<br />';

      //HTML inside of a string
      echo "<h1 class='entry-header'>$employeeFullName</h1><br />";

      //Variable a class
      $entryClass = "entry-heading";
      // echo "<h1 class='$entryClass'>$employeeFullName</h1><br />";

      //Variable as html
      $heading1 = "<h1 class='$entryClass'>$employeeFullName</h1>";

      echo $heading1;
      echo "<p class='entry-content'>I play for the Chicago Bulls and won 6 championships!</p>";
    ?>

    <h2>String Functions</h2>
    <?php
      //Convert string into an array
      //$fullName = "Efren Vasquez";
      $nameArray = explode(" ", $fullName);

      // $nameArray = array(
      //   "Efren",
      //   "Vasquez"
      // )

      echo $nameArray[0] . '<br />';

      //echo $nameArray;

      $nameArray = array (
        "Efren",
        "Vasquez",
        "Chicago",
        "Star Wars",
        "Random Words"
      );

      //var_dump($nameArray);

      //Convert array into string
      $nameArray2 = implode(" ",$nameArray);

      echo $nameArray2 . '<br />';

      //Lowercase first letter
      $name = "EFREN";
      echo lcfirst($name) . '<br />';

      //Strip whitespace from beginning of string
      $name = " Efren";
      echo "Hello " . $name . "<br />";
      echo "Hello " . ltrim($name) . "<br />";

      //Strip whitespace from the end string
      $name = "Efren ";
      echo rtrim($name) . "<br />";

      //Strip whitespace from the beginning and end
      $name = " Efren ";
      echo trim($name) . "<br />";

      //Matching characters
      $lastName1 = "Vasquez";
      $lastName2 = "Smith";

      $similarity = similar_text($lastName1, $lastName2);

      echo $similarity . "<br />";

      //Randomize a string
      $longString = "Hello and welcome to web interactivity";

      echo str_shuffle($longString) . "<br />";

      //Wordcount in a string
      echo str_word_count($longString) . "<br />";

      //Count characters in a string
      echo strlen($longString) . "<br / >";

      //Make string lowercase
      $upperCase = "THIS IS ALL UPPERCASE";

      echo strtolower($upperCase) . "<br / >";

      //Make string uppercase
      $lowerCase = "this is all uppercase";

      echo "<p>" . strtoupper($lowerCase) . "</p>";

      //Uppercase first character
      echo "<p>" . ucfirst($lowerCase) . "</p>";

      //Uppercase first letter of each word in a string
      echo "<p>" . ucwords($lowerCase) . "</p>";

      //Combining functions
      $upperCase = "THIS IS ALL UPPERCASE";

      echo "<p>" . ucfirst(strtolower($upperCase)) . "</p>";

      //Wordwrap
      $text = "The quick brown fox jumped over the lazy dog.";
      $newtext = wordwrap($text, 20, "<br />");

      echo $newtext;

    ?>


  </body>
</html>
