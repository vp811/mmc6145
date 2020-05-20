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
      //Valid ways to code a variables
      $first_name;
      $person;
      $address1;
      $_SERVER;
      $n_um_ber;
      $lastNameEmployee;
      $slider;
      $Slider;

      //Numbers
      $number1 = 5;
      $number3 = -23;
      $number4 = 65423;

      //Floats
      $float1 = 2.5;
      $float3 = 125.7;
      $float4 = -325.6;

      //Boolean
      $slider = true;
      $slider = false;

      //Strings
      $string1 = "This is a double quote string $number4";
      $string2 = 'This is a single quote string $number4';

      //Combine string and variables
      $firstName = "Efren ";
      $lastName  = "Vasquez";
      $fullName  = $firstName . $lastName;

      echo "Hello my name is $fullName <br />";
      echo 'Hello my name is $fullName <br />';
      echo 'Hello my name is ' . $fullName . '<br />';
      echo 'Hello my first name is ' . $firstName . " and my last name is " . $lastName . '<br />';

      //Index Arrays
      $teams = array(
        "Cubs",
        "Bears",
        "Bulls",
        "Blackshawks"
      );

      echo $teams[0] . "<br />";

      //Associative Arrays
      $citiesStates = array(
        "Gainesville" => "Florida",
        "Seattle" => "Washington",
        "Houston" => "Texas"
      );

      echo $citiesStates["Gainesville"] . "<br />";

      //Multidimensional Array
      $students = array(
        "Steve"   => array(
          "Student ID" => 112233,
          "Grades" => "A"
        ),
        "Allison" => array(
          "Student ID" => 223344,
          "Grades" => "A-"
        ),
        "Billy"   => array(
          "Student ID" => 556677,
          "Grades" => "C"),
      );

      $mmc6145 = array(
        "Professor"         => "Efren Vasquez",
        "Class Name"        => "Web Interactivity & Engagement",
        "Students"          => $students,
        "Semester"           => "Fall 2018",
        "Number of Students" => 16
      );

      echo $mmc6145["Students"]["Steve"]["Student ID"] . "<br />";

    ?>

  </body>
</html>
