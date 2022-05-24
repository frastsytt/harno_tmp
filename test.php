<?php
session_start();
require_once("config.php");
echo "Tere";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
$conn->close();
?>
