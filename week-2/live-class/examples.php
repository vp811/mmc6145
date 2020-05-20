<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Live Examples - Intro to PHP</title>

    <link type="text/css" src="css/style.css" />
  </head>
  <body>
    <h1>Live Examples</h1>

    <?php
      //Valid ways to code variables
      $first_name;
      $person;
      $address1;
      $_SERVER;
      $n_um_ber;
      $lastNameEmployee;
      $slider = "This is lowercase";
      $Slider = "This is uppercase";

      echo $slider . "<br />";
      echo $Slider . "<br />";

      //Numbers - Integers
      $number1 = 5;
      $number2 = -4;
      $number3 = 65165143523454;

      echo number_format($number3) . "<br />";

      //Floats
      $floats1 = 2.5;
      $floats2 = 125.7;
      $floats3 = -156.7;

      //Boolean
      $slider = true;
      $slider = false;

      //Strings
      $strings1 = "This is a double quotation string";
      $strings2 = 'This is a single quotation string';

      $firstName = "Efren";
      $lastName = "Vasquez";

      echo "Hello my name is $firstName $lastName" . "<br />";
      echo 'Hello my name is $firstName $lastName' . "<br />";

      echo "<p class='entry-content'>My name is $firstName and I live in Florida</p>";

      //Arrays
      $teams = array (
        "Cubs",
        "Bears",
        "Bulls",
        "Blackhawks"
      );

      echo "<p class='team'>My favorite baseball team are the $teams[4]</p>";

      $teams[] = "Fire";

      echo "<p class='team'>My favorite MLS team are the $teams[4]</p>";

      //Associative Arrays
      $citiesStates = array(
        "Gainesville" => "Florida",
        "Seattle"     => "Washington",
        "Houston"     => "Texas"
      );

      echo $citiesStates['Seattle'];

      $favoriteCity = $citiesStates['Seattle'];
      echo "<p>My favorite city is $favoriteCity</p>";

      //Multidimensional Array
      $students = array(
        "Steve"   => array(
          "Student ID"  => 112233,
          "Grades"      => "A"
        ),
        "Allison" => array(
          "Student ID"  => 223344,
          "Grades"      => "A-"
        ),
        "Billy"   => array(
          "Student ID"  => 556677,
          "Grades"      => "C"
        )
      );

      $mmc6145 = array(
        "Professor"           => "Efren Vasquez",
        "Class Name"          => "Advanced Web Topics 3",
        "Students"            => $students,
        "Semester"            => "Summer 2020",
        "Number of Students"  => 16
      );

      echo "<h2>The Professor for MMC6145 is {$mmc6145['Professor']}</h2>";
      echo "<h3>What is the name of the class?</h3>";
      echo $mmc6145['Class Name'];
      echo "<h3>How many students are there in this class?</h3>";
      echo "<p>There are {$mmc6145['Number of Students']} students</p>";
      echo "<h3>What was the highest grade in the class?</h3>";
      echo "<p>" . $mmc6145['Students']["Steve"]["Grades"] . " was the highest grade in the class</p>";

      echo $mmc6145['Students']["Allison"]["Student ID"];
      echo $mmc6145['Students']["Billy"]["Grades"];

    ?>

  </body>
</html>
