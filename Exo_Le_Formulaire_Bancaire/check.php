
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Informations transmises :</h2>";
  echo "<p><strong>NOM :</strong> " . htmlspecialchars($_POST['lname']) . "</p>";
  echo "<p><strong>PRENOM :</strong> " . htmlspecialchars($_POST['fname']) . "</p>";
  echo "<p><strong>Date de naissance :</strong> " . htmlspecialchars($_POST['date-naissance']) . "</p>";
  echo "<p><strong>e-mail :</strong> " . htmlspecialchars($_POST['email']) . "</p>";
  echo "<p><strong>Code confidentiel :</strong> " . htmlspecialchars($_POST['code-confidentiel']) . "</p>";
}
?>