<?php

include("../templates/navigation.php");
require("../dbConnect.php");

if(isset($_POST['name']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['persons'])){
	
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
	
	$query = "INSERT INTO bokning (bokning_namn,bokning_datum,bokning_tid,bokning_bord,bokning_antal,bokning_extra) VALUES ('$namn','$datum','$tid',$table_id,$antal,'$extra');";
	
	mysqli_query($dbc,$query);
	
}

?>
<link rel="stylesheet" href="../css/bokaBordCss.css">

<main>

	<form action="" method="POST">
	
		<h1> Boka bord här! </h1>
		<h4> <i> * = Måste fyllas i </i> </h4>
		<p> Namn*: </p> <input type="text" name="name"> <br>
		<p> Datum*: </p> <input type="date" name="date"> <br>
		<p> Tid*: </p> <input type="time" name="time"> <br>
		<p> Antal personer*: </p> <input type="text" name="persons"> <br>
		<p> Extra: </p> <input type="text" name="extra"> <br>
		<input type="reset" value="Rensa"> <input type="submit" value="Boka">


	</form>
	

	
</main>

</body>
</html>
<?php

include("../templates/footer.php");

?>




