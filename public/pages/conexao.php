<?php
function getConnection() {
  $username = 'root';
  $password = 'mysql';
  $conn = new PDO('mysql:host=localhost;dbname=provapratica', $username, $password);
  return $conn;
}
 ?>
