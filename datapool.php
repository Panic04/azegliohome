<?php
$mysqli = new mysqli("localhost", "u746375557_admin", "Panic12345.", "u746375557_phplogin");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT name, n1, n2, n3, n4, n5, n6 FROM data";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $n1, $n2, $n3, $n4, $n5, $n6);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>name</th>";
echo "<td>" . $name . "</td>";
echo "<th>name</th>";
echo "<td>" . $n1 . "</td>";
echo "<th>name</th>";
echo "<td>" . $n2 . "</td>";
echo "<th>name</th>";
echo "<td>" . $n3 . "</td>";
echo "<th>name</th>";
echo "<td>" . $n4 . "</td>";
echo "<th>name</th>";
echo "<td>" . $n5 . "</td>";
echo "<th>name</th>";
echo "<td>" . $n6 . "</td>";
echo "</tr>";
echo "</table>";
?>