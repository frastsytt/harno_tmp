<?php
    class Prof
    {
        public $name;
        public $desc;
    }
echo "534";
$myArray = [];

require_once($_SERVER['DOCUMENT_ROOT']."/harno_tmp/config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Performing insert query execution
// here our table name is college
$sql = "SELECT eriala_nimi, eriala_kirjeldus FROM erialad;";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
  $rida = new Prof
  $rida->name = $row['eriala_nimi'];
  $rida->desc = $row['eriala_kirjeldus'];
  echo $rida;
}

// Close connection
mysqli_close($conn);
?>