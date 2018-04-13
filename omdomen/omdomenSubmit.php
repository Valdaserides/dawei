<?php

require("../dbConnect.php");

mysqli_query($dbc,"SET NAMES UTF8");

$omdome = $_POST['omdome'];
$betyg = $_POST['betyg'];

$query = "INSERT INTO omdomen (omdome,betyg) VALUES ('$omdome','$betyg');"


?>