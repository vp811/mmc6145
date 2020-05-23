<?php
//Function
function firstFunction(){
  echo "<footer>";
  echo "<p>This is my footer</p>";
  echo "</footer>";
}

function gatorBait(){
  $image = "<img src='images/gator-bait.gif' alt='Tim Tebow' />";

  echo $image;
}

//Single arguments function
function familyName($firstName){
  $firstName = ucfirst($firstName);

  echo "<p>Hello $firstName Smith</p>";
}

//Two arguments function
function fullName($firstName,$lastName){
  $firstName = ucfirst($firstName);
  $lastName = ucfirst($lastName);

  echo "<p>Hello $firstName $lastName, Welcome to my website!</p>";
}

//Three argument function
function yourNumbers($numbers1, $numbers2, $numbers3){
  $totalNumber = $numbers1 + $numbers2 + $numbers3;
  $totalNumber = number_format($totalNumber);

  echo "<p>The sum of your numbers is $totalNumber</p>";
}

//Check if function does not exist
if(!function_exists('yourNumbers')){
  function yourNumbers($numbers1, $numbers2, $numbers3){
    $totalNumber = $numbers1 + $numbers2 + $numbers3;
    $totalNumber = number_format($totalNumber);

    echo "<p>The sum of your numbers is $totalNumber</p>";
  }
}

//Date Function
function dateExamples(){
  //Set to default timezone to use
  date_default_timezone_set('America/New_York');

  //Print the day of week
  echo date("l") . "<br />";

  //Print the month, day, year (2/20/20)
  echo date("m/d/y") . "<br />";
  echo date("n/d/y") . "<br />";

  //Prints day of the year
  echo "Today is the " . date('z') . " of the year" . "<br />";

  //Print out Month, day, and year
  echo date("F d, Y") . "<br />";

  //Prints the day and month (2/2020)
  echo date("m/Y")  . "<br />";

  //Print day of week, day of month, month and time
  echo date('l jS \of F Y h:i:s A') . "<br />";
}


//Make folder/directory
//mkdir("test/");
function createDirectory(){
  if(!file_exists("../live-lecture")){
    mkdir("../live-lecture");
  }
}

//Remove directory
//rmdir("../live-lecture");

//Create file
function createWriteFile(){
  if(!file_exists("live-examples")){
    $myfile = fopen("../live-lecture/live-examples.php", "w") or die("Unable to open file!");
    $txt = "<!DOCTYPE html>
    <html>
      <head>
        <meta charset='utf-8' />
        <title>Functions - Intro to PHP</title>
      </head>

      <body>
      <h1>Functions</h1>
      <h2>Creating Functions</h2>
      <?php

      ?>
      <p>This is the end of the document</p>

      </body>
    </html>";

    fwrite($myfile, $txt);

    fclose($myfile);

  }
}


//Image Gallery
function imageGallery(){
  $dirname = "images/";
  $images = glob($dirname . "*.jpg");

  echo "<div class='images-container'>";
    foreach($images as $image){
      $modifiedDate = filemtime($image);
      $modifiedDate = date("F d Y", $modifiedDate);
      echo "<div class='individual-image'>";
      echo "<img src='$image' width='500' />";

      echo "<p>Image last modified on $modifiedDate</p>";
      echo "</div>";
    }

    $totalImages = count($images);
    echo "<p>Viewing $totalImages images.</p>";
  echo "</div>";
}
?>
