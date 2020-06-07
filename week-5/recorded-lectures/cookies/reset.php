<?php
  //Delete the cookies
  setcookie('font_size','', time()-6000);
  setcookie('font_color','', time()-6000);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reset Your Settings</title>
  </head>
  <body>
    <p>Your settings have been reset! Feel free to <a href="customize.php">customize</a> them again.</p>
  </body>
</html>
