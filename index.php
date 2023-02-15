<?php
  include_once 'header.php';
?>

<?php
  if(isset($_SESSION["useruid"])){
    echo "<p>Hello " . $_SESSION["useruid"] . "</p>";
  }
?>

  <main>
    <div>
      <h1>This is the Home Page</h1>
    </div>
  </main>

<?php
  include_once 'footer.php';
?>