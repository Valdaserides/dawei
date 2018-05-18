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
	
	if($namn == null || $tid == null || $datum == null || $antal == null){
		echo '<h1 style="font-size:4em;color:white;text-align:center;">Du måste skriva in allt markerat med *</h1>';
	} 	
	
	else{
	
		$query = "SELECT * FROM bord WHERE bord_platser >= $antal";
		
		$result = mysqli_query($dbc,$query);
		
		if($table = mysqli_fetch_array($result)){
			$table_id = $table['bord_id'];
			$query = "INSERT INTO bokning (bokning_namn,bokning_datum,bokning_tid,bokning_bord,bokning_antal,bokning_extra) VALUES ('$namn','$datum','$tid',$table_id,$antal,'$extra');";
			echo '<h3 style="padding:20px;background-color:rgba(0,0,0,.7);font-size:3em;color:green;text-align:center;font-weight:900;">Klart! ' . $namn . ' har bokat bord den ' . $datum . ' klockan ' . $tid . '.</h3>';
		}
		else{
			echo '<h1 style="font-size:3em;color:red;text-align:center;font-weight:900;">Finns inget bord ledigt.</h1>';
		}
		mysqli_query($dbc,$query);
	}
}

?>
<link rel="stylesheet" href="../css/bokaBordCss.css">
<head>
	<title> Boka bord </title>
</head>
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




