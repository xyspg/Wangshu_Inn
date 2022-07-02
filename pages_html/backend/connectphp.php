<?php
header('Content-Type:text/html; charset=UTF-8');
$conn = new mysqli("127.0.0.1", 'root', 'qwerty','phpcrud');
$conn1 = new mysqli("127.0.0.1", 'root', 'qwerty','phpcrud1');
$sql = "SELECT * FROM characterweaponsoup";
$result = $conn->query($sql);
$columns = $result->fetch_all();
print_r($columns[0][0]);
