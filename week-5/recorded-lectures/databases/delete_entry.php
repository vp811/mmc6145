<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adding Items to Database</title>
  </head>

  <body>
    <h1>Delete Entry</h1>

    <?php
      $dbc = mysqli_connect('localhost', 'root', 'root', 'database-testing');

      if(isset($_GET['id']) && is_numeric($_GET['id'])){
        //Define query
        $query = "SELECT title, entry FROM entries WHERE id={$_GET['id']}";

        if($r = mysqli_query($dbc, $query)){
          $row = mysqli_fetch_array($r); // Retrieving the information

          //Make the form:
          echo "<form action='delete_entry.php' method='post'>
          <p>Are you sure you want to delete this entry?</p>
          <p><h3>" . $row['title'] . "</h3>" . $row['entry'] . "<br />
          <input type='hidden' name='id' value='" . $_GET['id'] . "'>
          <input type='submit' name='submit' value='Delete This Entry!'></p>
          </form>";
        }else{
          echo "<p>Could not retrieve the blog entry because:" . error($dbc) . "</p>";
          echo "<p>The query being run was: " . $query . "</p>";
        }
      }elseif(isset($_POST['id']) && is_numeric($_POST['id'])){
        $query = "DELETE FROM entries WHERE id={$_POST['id']} LIMIT 1";

        $r = mysqli_query($dbc, $query); //Execute the query

        //Reporting on the results
        if(mysqli_affected_rows($dbc) == 1){
          echo "<p>The blog entry has been deleted</p>";
          echo "<a href='view_entries.php'>View All Entries</a>";
        }else{
          echo "<p>Could not delete this blog entry because: " . mysqli_error($dbc) . "</p>";
          echo "<p>The query being run was: " . $query . "</p>";
        }
      }else{
        echo "<p>This page has been accessed in error.</p>";
      }

      mysqli_close($dbc);//close connection
    ?>
  </body>
</html>
