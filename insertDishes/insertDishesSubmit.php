<?php
	
	require('../dbConnect.php');
	
	mysqli_query($dbc,"SET NAMES UTF8");
	
	$namn = $_POST['namn'];
	$pris = $_POST['pris'];
	$bild = $_POST['bild'];
	$beskrivning = $_POST['beskrivning'];
	$kategori = $_POST['kategori'];
	$starkhet = $_POST['starkhet'];
	
	$query = "INSERT INTO matratter (namn,pris,bild,beskrivning,kategori,starkhet) VALUES ('$namn','$pris','$bild','$beskrivning','$kategori','$starkhet')";

	if(mysqli_query($dbc,$query)){
		
		echo "klart!";
		echo '<a href="insertdishes.php"> <h1> tillbaka </h1> </a>';
		
	}
	else{
		
		echo "Fail";
		
	}

?>
