<?php
session_start();
class Prof
{
    public $name;
    public $desc;
}
echo "Tere!";

$myArray = [];

require_once("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Performing insert query execution
// here our table name is college
$sql = "SELECT eriala_nimi, eriala_kirjeldus FROM erialad";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
  $rida = new Prof
  $rida->name = $row['eriala_nimi'];
  $rida->name = $row['eriala_kirjeldus'];
  $myArray[] = $rida;

}

mysqli_close($conn);

echo $myArray[0]


?>