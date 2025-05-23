php
Copy
Edit
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Selected Fruits</title>
</head>
<body>
  <h1>Your Selected Fruits</h1>
  <?php
  if (isset($_POST['fruits'])) {
    $selectedFruits = $_POST['fruits'];

    echo "<ul>";
    foreach ($selectedFruits as $fruit) {
      echo "<li>$fruit</li>";
    }
    echo "</ul>";

    if (in_array("Mango", $selectedFruits)) {
      echo "<p>You picked Mango — a tropical favorite!</p>";
    }
  } else {
    echo "<p>No fruits selected. Please go back and choose some.</p>";
  }
  ?>
</body>
</html>