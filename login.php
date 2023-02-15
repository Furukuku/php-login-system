<?php
  include_once 'header.php';
?>

  <section>
    <div class="container-sm w-50 mt-5 mb-5 p-4 border border-1 rounded-2 bg-light">
      <div class="mx-2 mt-2 text-danger" style="font-size: 13px">
        <?php
          if(isset($_GET["error"])){
            if($_GET["error"] == "none"){
              echo "<p class='text-success'>Account created!</p>";
            }
          }
        ?>
      </div>
      <h1 class="text-center">Log in</h1>
      <form action="includes/login.inc.php" method="post">
        <div class="form-floating mt-4">
          <input type="text" id="uid" class="form-control" placeholder="Enter Username/Email" name="uid">
          <label for="uid" class="form-label">Username/Email</label>
        </div>
        <div class="form-floating mt-3">
          <input type="password" id="password" class="form-control" placeholder="Enter password" name="password">
          <label for="password" class="form-label">Password</label>
        </div>
        <div class="mx-2 mt-2 text-danger" style="font-size: 13px">
          <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
              }else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect username/email or password!</p>";
              }
            }
          ?>
        </div>
        <div class="d-flex justify-content-center mt-5">
          <button class="btn btn-primary" name="submit">Log in</button>
        </div>
      </form>
      <p class="text-center mt-4">Already have an account? <a href="login.php">Click here</a></p>
    </div>
  </section>

<?php
  include_once 'footer.php';
?>