<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Functions - Intro to PHP</title>
  </head>

  <body>
    <h1>Functions</h1>
    <h2>Creating Functions</h2>
    <?php
      include('functions/functions.php');

      gatorBait();

      //Single Argument Functions
      familyName("John");
      familyName("Alisson");
      familyName("James");
      familyName("Sal");
      familyName("efren");

      fullName("Michael","Scott");
      fullName("Jim","Halpert");
      fullName("Dwight","Schrute");

      yourNumbers(5,76,10);
      yourNumbers(10,1,.5);
      yourNumbers(969, 1023, 5);

      dateExamples();

      createDirectory();
      createWriteFile();

      imageGallery();
    ?>


    <p>This is the end of the document</p>

    <?php firstFunction(); ?>

  </body>
</html>
