<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adding Items to Database</title>
  </head>

  <body>
    <h1>Form Entries</h1>
    <?php
      $dbc = mysqli_connect('localhost', 'root', 'root', 'database-testing');

      $query = 'SELECT * FROM entries ORDER BY date_entered DESC';

      if($r = mysqli_query($dbc, $query)){
        while($row = mysqli_fetch_array($r)){
          echo "<h3>{$row['title']}</h3>
          <p>{$row['entry']}</p>
          <a href='edit_entry.php?id={$row['id']}'>Edit</a>
          <a href='delete_entry.php?id={$row['id']}'>Delete</a>
          <hr />";
        }
      }else{
        echo "<p>Could not retrieve the data because: " . mysqli_error($dbc) . "</p>";
        echo "<p>The query being run was: " . $query . "</p>";
      }

      mysqli_close($dbc);//Closes conntection to database

      echo "<a href='add_entry.php'>Add New Entry</a>";
    ?>
  </body>
</html>
