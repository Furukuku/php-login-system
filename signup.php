<?php
  include_once 'header.php';
?>

  <section>
    <div class="container-sm w-50 mt-5 mb-5 p-4 border border-1 rounded-2 bg-light">
      <h1 class="text-center">Sign up</h1>
      <form action="includes/signup.inc.php" method="post">
        <div class="mt-4">
          <label for="name" class="form-label">Full name</label>
          <input type="text" id="name" class="form-control" placeholder="Enter Full name" name="name">
        </div>
        <div class="mt-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email">
        </div>
        <div class="mx-2 mt-2 text-danger" style="font-size: 13px">
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "invalidemail"){
              echo "<p>Invalid email!</p>";
              }
            }
          ?>
        </div>
        <div class="mt-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" class="form-control" placeholder="Enter Username" name="uid">
        </div>
        <div class="mx-2 mt-2 text-danger" style="font-size: 13px">
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "invaliduid"){
                echo "<p>Invalid username!</p>";
              }else if($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken!</p>";
              }
            }
          ?>
        </div>
        <div class="mt-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" class="form-control" placeholder="Enter password" name="password">
        </div>
        <div class="mt-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" id="confirm-password" class="form-control" placeholder="Confirm password" name="confirm-password">
        </div>
        <div class="mx-2 mt-2 text-danger" style="font-size: 13px">
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords doesn't match</p>";
              }
            }
          ?>
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Please fill up all fields!</p>";
              }else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";
              }else if($_GET["error"] == "none"){
                echo "<p class='text-success'>You have sign up!</p>";
              }
            }
          ?>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <button class="btn btn-primary" name="submit">Sign up</button>
        </div>
      </form>
      <p class="text-center mt-4">Already have an account? <a href="login.php">Click here</a></p>
    </div>
  </section>

<?php
  include_once 'footer.php';
?>