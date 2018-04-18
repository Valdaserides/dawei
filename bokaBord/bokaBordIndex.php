<?php

include("../templates/navigation.php");
require("../dbConnect.php");

if(isset($_POST['name']) && isset($_POST['datum']) && isset($_POST['time']) && isset($_POST['persons'])){
	
	$namn = $_POST['name'];
	$tid = $_POST['time'];
	$datum = $_POST['date'];
	$extra = "";
	if(isset($_POST['extra'])){
		
		$extra = $_POST['extra'];
		
	}
	
	$antal = $_POST['persons'];
	
	$query = "SELECT * FROM bord WHERE bord_platser >= $antal";
	
	$result = mysqli_query($dbc,$query);
	
	if($table = mysqli_fetch_array($result)){
		$table_id = $table['bord_id'];
	}
	else{
		echo "FInns inget bord ledigt.";
	}
	
	$query = "INSERT TO bokning (bokning_namn,bokning_datum,bokning_tid,bokning_bord,bokning_antal) VALUES ('$namn','$datum','$tid',$table_id,$antal,'$extra');";
	
	mysqli_query($dbc,$query);
	
}

?>
<link rel="stylesheet" href="../css/bokaBordCss.css">

<form action="" method="POST">

	Namn*: <input type="text" name="name"> <br>
	Datum*: <input type="date" name="date"> <br>
	Tid*: <input type="text" name="time"> <br>
	Antal personer*: <input type="text" name="persons"> <br>
	Extra: <input type="text" name="extra"> <br>
	<input type="submit"> <input type="reset">


</form>


</body>
</html>