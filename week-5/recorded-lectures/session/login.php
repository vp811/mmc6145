<?php
//This page lets people log into the website.

echo "<h2>Login Form</h2>";
echo "<p>Users who are logged in can take advantage of certain features like this, that and other things.</p>";

//Check if the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  //Handle the form
  if((!empty($_POST['email'])) && (!empty([$_POST['password']]))){
    if((strtolower($_POST['email']) == 'e.vasquez@ufl.edu') && ($_POST['password'] == 'beetfarm')){

      //Do Session
      session_start();
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['loggedin'] = time();

      //Redirect the user to the welcome page
      ob_end_clean(); //Destroy the buffer
      header('Location: welcome.php'); //Redirect user to new page
      exit();
    }else{
      echo "<p>The submitted email address and password do not match on the file. Please try againa</p>";
    }
  }else{
    echo "<p>Please make sure you enter both the email and password. Go back and try again</p>";
  }
}else{
  //Display Form ?>
  <form class="form-login" action="login.php" method="post">
    <p>
      <label for="email">Email Address</label>
      <input type="email" name="email">
    </p>

    <p>
      <label for="password">Password</label>
      <input type="password" name="password">
    </p>

    <p>
      <input class="login-buton" type="submit" name="submit" value="Log In!">
    </p>
  </form>

<?php } ?>
