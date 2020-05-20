<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Variables - Intro to PHP</title>

    <link type="text/css" src="css/style.css" />
  </head>
  <body>
    <h1>Coding Variables</h1>
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

      //Invalid ways to code variables
      // $first name; //No Spaces
      // $first.name; //No periods
      // first_name; //Missing $
      // $1address; //Can't start with a number
      // $first-name; //No dashes

      //Predefined variables
      $GLOBAL; //Reference all variables available in global scope
      $_SERVER; //Server and execution environment information
      $_POST; //HTTP POST variables
      $_GET; //HTTP GET Variables
      $_FILES; //HTTP File Upload Variables
      $_REQUEST; //HTTP Request Variables
      $_ENV; //Environment variables
      $_COOKIE; //HTTP Cookies
    ?>
      <pre>
        <code>
          <?php
            print_r($_SERVER);
          ?>
        </code>
      </pre>

    <?php
      //Numbers
      $number1 = 1;
      $number2 = 25;
      $number3 = -15;
      $number4 = 12356;

      //Floats
      $float1 = 1.1;
      $float2 = 4.6;
      $float3 = 134.6;
      $float4 = -126.6;
      $float5 = 0.6;

      //Boolean
      $slider = true;
      $slider = false;

      //Strings
      $string1 = "This is a double quote string $number4";
      $string2 = 'This is a single quote string $number4';

      //Arrays
      $teams = array(
        "Cubs",
        "Bears",
        "Bulls",
        "Blackshawks"
      );

      $cities = array(
        "Florida"     =>  "Gainesville",
        "California"  =>  "San Fracisco",
        "Washington"  =>  "Seattle",
        "Georgia"     =>  "Atlanta"
      );

      //Adding Variables together
      $myAge      = 33;
      $yourAge    = 27;
      $totalAge  = $myAge + $yourAge;

      //echo $totalAge;
      echo $myAge - $yourAge;

    ?>

  </body>
</html>
