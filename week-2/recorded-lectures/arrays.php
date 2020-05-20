<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Arrays - Intro to PHP</title>
  </head>

  <body>
    <h1>Coding Arrays</h1>
    <h2>Arrays</h2>

    <?php
      //Arrays
      $gradesStudent1 = array(
        98,
        "Project 1",
        "Efren Vasquez"
      );

      echo "<p>" . $gradesStudent1[0] . "</p>";
      echo "<p>" . $gradesStudent1[1] . "</p>";
      echo "<p>" . $gradesStudent1[2] . "</p>";

      foreach($gradesStudent1 as $value){
        echo "<p>" . $value . "</p>";
      }

      //Keys
      // $gradesStudent1 = array(
      //   0 => 98,
      //   1 => "Project 1",
      //   2 => "Efren Vasquez"
      // );

      $student = array(
        "Grade" => 98,
        "Assignment" => "Project 1",
        "Name" => "Efren Vasquez"
      );

      echo "<p>Grade: " . $student["Grade"] . "</p>";
      echo "<p>Assignment: " . $student["Assignment"] . "</p>";
      echo "<p>Name: " . $student["Name"] . "</p>";

      //Add key and value to array
      $student["Birthdate"] = "5/16/1998";
      $student["Birth Place"] = "Seattle";
      $student["Year"] = "Sophmore";

      foreach($student as $key => $value){
        echo "<p>$key: $value </p>";
      }

      //Multidimensional Arrays
      $fruits = array(
        "Apples",
        "Bananas",
        "Oranges"
      );

      $meats = array(
        "Steaks",
        "Hamburgers",
        "Pork Chops"
      );

      $groceries = array(
        "Fruits" => $fruits,
        "Meats"  => $meats,
        "Other"  => "Peanuts",
        "Cash"   => 30.00
      );

      $us_states = array(
        'AL'=>'ALABAMA',
        'AK'=>'ALASKA',
        'AS'=>'AMERICAN SAMOA',
        'AZ'=>'ARIZONA',
        'AR'=>'ARKANSAS',
        'CA'=>'CALIFORNIA',
        'CO'=>'COLORADO',
        'CT'=>'CONNECTICUT',
        'DE'=>'DELAWARE',
        'DC'=>'DISTRICT OF COLUMBIA',
        'FM'=>'FEDERATED STATES OF MICRONESIA',
        'FL'=>'FLORIDA',
        'GA'=>'GEORGIA',
        'GU'=>'GUAM GU',
        'HI'=>'HAWAII',
        'ID'=>'IDAHO',
        'IL'=>'ILLINOIS',
        'IN'=>'INDIANA',
        'IA'=>'IOWA',
        'KS'=>'KANSAS',
        'KY'=>'KENTUCKY',
        'LA'=>'LOUISIANA',
        'ME'=>'MAINE',
        'MH'=>'MARSHALL ISLANDS',
        'MD'=>'MARYLAND',
        'MA'=>'MASSACHUSETTS',
        'MI'=>'MICHIGAN',
        'MN'=>'MINNESOTA',
        'MS'=>'MISSISSIPPI',
        'MO'=>'MISSOURI',
        'MT'=>'MONTANA',
        'NE'=>'NEBRASKA',
        'NV'=>'NEVADA',
        'NH'=>'NEW HAMPSHIRE',
        'NJ'=>'NEW JERSEY',
        'NM'=>'NEW MEXICO',
        'NY'=>'NEW YORK',
        'NC'=>'NORTH CAROLINA',
        'ND'=>'NORTH DAKOTA',
        'MP'=>'NORTHERN MARIANA ISLANDS',
        'OH'=>'OHIO',
        'OK'=>'OKLAHOMA',
        'OR'=>'OREGON',
        'PW'=>'PALAU',
        'PA'=>'PENNSYLVANIA',
        'PR'=>'PUERTO RICO',
        'RI'=>'RHODE ISLAND',
        'SC'=>'SOUTH CAROLINA',
        'SD'=>'SOUTH DAKOTA',
        'TN'=>'TENNESSEE',
        'TX'=>'TEXAS',
        'UT'=>'UTAH',
        'VT'=>'VERMONT',
        'VI'=>'VIRGIN ISLANDS',
        'VA'=>'VIRGINIA',
        'WA'=>'WASHINGTON',
        'WV'=>'WEST VIRGINIA',
        'WI'=>'WISCONSIN',
        'WY'=>'WYOMING',
        'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
        'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
        'AP'=>'ARMED FORCES PACIFIC'
        );

        // echo "<ul>";
        //   foreach($us_states as $key => $value){
        //     echo "<li>$key: $value</li>";
        //   }
        // echo "</ul>";

        //Reverse Sort
        krsort($us_states);

        // echo "<ul>";
        //   foreach($us_states as $key => $value){
        //     echo "<li>$key: $value</li>";
        //   }
        // echo "</ul>";

        //Shuffle
        shuffle($us_states);
        echo "<ul>";
          foreach($us_states as $key => $value){
            echo "<li>$key: $value</li>";
          }
        echo "</ul>";

    ?>


  </body>
</html>
