<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>View your Settings</title>
    <style type="text/css">
      body{
        <?php
          //Check for a font size value
          if(isset($_COOKIE['font_size'])){
            echo "font-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
          }else{
            echo "font-size: medium;";
          }

          //Check for a font_color value
          if(isset($_COOKIE['font_color'])){
            echo "color: #" . htmlentities($_COOKIE['font_color']) . ";\n";
          }else{
            echo "color: #000;";
          }
        ?>
      }
    </style>
  </head>
  <body>
    <p><a href="customize.php">Customize Your Settings</a></p>
    <p><a href="reset.php">Reset Your Settings</a></p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
