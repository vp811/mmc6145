<?php
if($dbc = mysqli_connect('localhost','root','root','database-testing')){
  echo "Successfully";

  $query = 'CREATE TABLE entries(id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, title VARCHAR(100) NOT NULL, entry TEXT NOT NULL, date_entered DATETIME NOT NULL) CHARACTER SET utf8';

  if(@mysqli_query($dbc, $query)){
    echo "<p>The table has been created!</p>";
  }else{
    echo "<p>Could not create the table because: " . mysqli_error($dbc) . "</p>";
    echo "<p.The query being run was: " . $query . "</p>";
  }
}else{
  echo "Error";
}
