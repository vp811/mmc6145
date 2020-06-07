<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adding Items to Database</title>
  </head>

  <body>
    <h1>Add Data to Database</h1>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Validate form data

        $problem = FALSE;

        if(!empty($_POST['title']) && !empty($_POST['entry'])){
          $title = trim(strip_tags($_POST['title']));
          $entry = trim(strip_tags($_POST['entry']));
        }else {
          echo "<p>Please submit both a title and an entry</p>";

          $problem = TRUE;
        }

        if(!$problem){
          //Connect to the database
          $dbc = mysqli_connect('localhost', 'root', 'root', 'database-testing');

          //Define query
          $query = "INSERT INTO entries (id, title, entry, date_entered) VALUES(0,'$title', '$entry', NOW())";

          //Execute query
          if(@mysqli_query($dbc, $query)){
            echo "<p>The blog entry has been added!</p>";

            echo "<a href='view_entries.php'>View All Entries</a>";
          }else{
            echo "<p>Could not add the entry because: " . mysqli_error($dbc) . "</p>";

            echo "<p>The query being run was:" . $query . "</p>";
          }

          mysqli_close($dbc); //Close connection to database
        }//No issues
      }//End of the submission if statement
    ?>

    <form action="add_entry.php" method="post">
      <p>Entry Title: <input type="text" name="title" maxsize="100"></p>
      <p>Entry Text: <textarea name="entry" cols="40" rows="5"></textarea></p>

      <input type="submit" name="submit" value="Post this Entry!">

    </form>
  </body>
</html>
