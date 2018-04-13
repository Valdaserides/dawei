<?php

include("../templates/navigation.php"); // includerar menyn



?>
<link rel="stylesheet" href="../css/omdomenCss.css">

<main>
		
	<section class="text">
	
		<h1> Vi på Dawei sätter alltid kunden i fokus. Vi uppskattar om du skriven ett omdömen om oss och våran support. </h1>
		<h3> Skriv ett omdöme nedan eller kolla på alla som redan finns. </h3>

	</section>
	
	<div id="omdomen">
	
		<section class="alla-omdomen">
		
			
		
		</section>
		
		<form action="omdomenIndex.php" method="POST" class="omdomen-form">
		
			Skriv ditt omdöme: <input type="text" name="omdome"> <br>
			Betyg: <br> 1 <input type="radio" value="1" name="betyg"> <br> 2 <input type="radio" value="2" name="betyg"> <br> 3 <input type="radio" value="3" name="betyg"> <br> 4 <input type="radio" value="4" name="betyg"> <br> 5 <input type="radio" value="5" checked="checked" name="betyg"> <br>
		
			<input type="submit" value="Skicka"> <br>
			<input type="reset" value="Reset">
		
		</form>
		
	</div>
		
</main>

<?php 

include("../templates/footer.php"); // footer 

require("../dbConnect.php");

mysqli_query($dbc,"SET NAMES UTF8");

$omdome = $_POST['omdome'];
$betyg = $_POST['betyg'];

$query = "INSERT INTO omdomen (omdome,betyg) VALUES ('$omdome','$betyg');";
echo $query;

if(isset($_POST['omdome']) && isset($_POST['betyg'])){
	mysqli_query($dbc,$query);
}
else{
	echo "";
}

?>

</body>
</html>