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
      //Valid ways to code variable
      $first_name;
      $person;
      $address1;
      $_SERVER;
      $n_um_ber;
      $lastNameEmployee;
      $slider = "This is lowercase";
      $Slider = "This is uppercase";

      echo "<p>$slider</p>";
      echo "<p>$Slider</p>";

      //Numbers - Integers
      $number1 = 143;
      $number2 = -1233;
      $number3 = 4;
      $number4 = 5612;

      echo number_format($number4) . "<br />";

      //Numbers - Floats
      $floats1 = 5.5;
      $floats2 = -3.5;
      $floats3 = 265.54;

      //Booleans
      $slider = true;
      $slider = false;

      //Strings
      $string1 = "<p class='entry-content'>This is a double quote string</p>";
      $string2 = '<p>This is a single quote string</p>';

      echo $string1;
      echo $string2;

      $firstName = "Efren";
      $lastName  = "Vasquez";

      echo "<p>Hello my first name is $firstName and my last name is $lastName</p>";
      echo '<p>Hello my first name is $firstName and my last name is $lastName</p>';
      echo '<p>Hello my first name is ' . $firstName . ' and my last name is ' . $lastName . '</p>';
    ?>

    <h2 class="entry-title"><?php echo "Title Page"; ?></h2>

    <?php
      //Arrays - Indexed
      $teams = array(
        "Cubs",
        "Bulls",
        "Blackhawks",
        "Bears"
      );

      echo "<p>My favorite baseball team are the $teams[0]</p>";

      $teams[] = "Fire";
      echo "<p>My favorite MLS team is the $teams[4]</p>";

      //Associative Array
      $citiesStates = array(
        "Gainesville"  => "Florida",
        "Seattle"      => "Washington",
        "Houston"      => "Texas"
      );

      $favoriteState = $citiesStates["Houston"];
      echo "<p>My favorite city is $favoriteState</p>";

      //Multidimensional Arrays
      $students = array(
        "Steve" => array(
          "Student ID"  => 112233,
          "Grades"      => "A+"
        ),
        "Allison" => array(
          "Student ID"  => 445566,
          "Grades"      => "A-"
        ),
        "Billy" => array(
          "Student ID"  => 778899,
          "Grades"      => "C"
        )
      );

      $mmc6145 = array(
        "Professor"           => "Efren Vasquez",
        "Class Name"          => "Advanced Web Topic 3",
        "Students"            => $students,
        "Semester"            => "Summer 2020",
        "Number of Students"  => 23
      );

      echo "<h2>The professor for MMC6145 is {$mmc6145['Professor']}</h2>";
      echo "<h3>What is the name of the class?</h3>";
      echo $mmc6145["Class Name"];
      echo "<h3>How many students are in the class?</h3>";
      echo "<p>There are {$mmc6145['Number of Students']} students </p>";
      echo "<h3>What is the highest grade?</h3>";
      echo "<p>" . $mmc6145["Students"]["Steve"]["Grades"] . "</p>";
      echo $mmc6145["Semester"] . "<br />";
      echo $mmc6145["Students"]["Allison"]["Student ID"];
    ?>


  </body>
</html>
