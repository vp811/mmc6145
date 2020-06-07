<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Adding Items to Database</title>
  </head>

  <body>
    <h1>Edit Entry</h1>
    <?php

    $dbc = mysqli_connect('localhost', 'root', 'root', 'database-testing');

    mysqli_set_charset($dbc, 'utf8');

    if(isset($_GET['id']) && is_numeric($_GET['id'])){
      $query = "SELECT title, entry FROM entries WHERE id={$_GET['id']}";

      if($r = mysqli_query($dbc,$query)){
        $row = mysqli_fetch_array($r);

        //Create form
        echo "<form action='edit_entry.php' method='post'>
        <p>Entry Title: <input type='text' name='title' maxsize='100' value='" . htmlentities($row['title']) . "'></p>
        <p>Entry Text: <textarea name='entry' cols='40' rows='5'>". htmlentities($row['entry']) . "</textarea></p>
        <input type='hidden' name='id' value='" . $_GET['id'] . "'>
        <input type='submit' name='submit' value='Update This Entry'>
        </form>
        ";
      }else{
        echo "<p>Could not retrieve the blog entry because:" . mysqli_error($dbc) . "</p>";
        echo "<p>The query being run was: " . $query . "</p>";
      }

    }elseif(isset($_POST['id']) && is_numeric($_POST['id'])){
      $problem = FALSE;

      if(!empty($_POST['title']) && !empty($_POST['entry'])){
        $title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
        $entry = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['entry'])));
      }else{
        echo "<p>Please submit both a title and an entry</p>";
        $problem = TRUE;
      }

      if(!$problem){
        //Define the query
        $query = "UPDATE entries SET title='$title', entry='$entry' WHERE id={$_POST['id']}";
        $r = mysqli_query($dbc, $query);

        //Report on the results
        if(mysqli_affected_rows($dbc) == 1){
          echo "<p>The blog entry has been updated</p>";
          echo "<a href='view_entries.php'>View Entries</a>";
        }else{
          echo "<p>Could not update the entry because:" . mysqli_error($dbc) . "</p>";
          echo "<p>The query being run was: " . $query . "</p>";
        }
      }

    }else{
      echo "<p>This page was accessed in error</p>";
    }

    mysqli_close($dbc);
    ?>
  </body>
</html>
