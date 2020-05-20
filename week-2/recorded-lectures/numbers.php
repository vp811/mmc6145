<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Numbers - Intro to PHP</title>
  </head>

  <body>
    <h1>Coding Numbers</h1>
    <h2>Numbers</h2>

    <?php
      //Valid Numbers
      $number1 = 1;
      $number2 = 24324;
      $number3 = -1981;
      $number4 = 3.14159;
      $number5 = -122.55;
      $number6 = 0.4;

      //Invalid Numbers
      //$invalidNumber1 = 1/3;
      //$invalidNumber2 = 1996a;
      //$invalidNumber3 = 08.02.06;
      //$invalidNumber4 = 151,561;

      //String
      $numberString = "45";
      $number       = 45;

      //Math Problems
      $electricity  = 218.63;
      $car          = 305;
      $internet     = 65.32;
      $food         = 300;
      $misc         = 500;

      $total_bills = $electricity + $car + $internet + $food + $misc;

      echo "<p>The total monthly bill is $$total_bills.</p>";

      $yearly_bill = $total_bills * 12;

      echo "<p>The total yearly bill is $$yearly_bill.</p>";
    ?>

    <h2>Number Functions</h2>
    <?php
      //Max Number
      $numbers = array(
        1,
        5,
        432156,
        -13677,
        3.14
      );

      echo "<p>Our max number is : " . max($numbers) . "</p>";
      echo "<p>Our min number is : " . min($numbers) . "</p>";

      //Value of pi
      echo pi() . "<br />";

      //Random Integer
      echo rand() . "<br />";

      //Random Integer between two numbers
      echo rand(33,125) . "<br />";

      //Round floats
      $pi = pi();
      echo round($pi, 6) . "<br />";

      //Square Root
      $number = 798;
      echo round(sqrt($number), 2) . "<br />";

      //Add coma to number
      echo number_format($yearly_bill);
    ?>

  </body>
</html>
