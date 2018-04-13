<?php

include("../templates/navigation.php"); // includerar menyn
require("../dbConnect.php"); // databasen

?>
<link rel="stylesheet" href="../css/omdomenCss.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<main>
		
	<section class="text">
	
		<h1> Vi på Dawei sätter alltid kunden i fokus. Vi uppskattar om du skriven ett omdömen om oss och våran support. </h1>
		<h3> Skriv ett omdöme nedan eller kolla på alla som redan finns. </h3>

	</section>
	
	<div id="omdomen">
		
		<form action="omdomenIndex.php" method="POST" class="omdomen-form">
		
			Skriv ditt omdöme: <input type="text" name="omdome"> <br>
			Betyg: <br> 1 <input type="radio" value="1" name="betyg"> <br> 2 <input type="radio" value="2" name="betyg"> <br> 3 <input type="radio" value="3" name="betyg"> <br> 4 <input type="radio" value="4" name="betyg"> <br> 5 <input type="radio" value="5" name="betyg"> <br>
		
			<input type="submit" value="Skicka"> <br>
			<input type="reset" value="Reset">
		
		</form>
		
		<?php
		if(isset($_POST['omdome']) && isset($_POST['betyg'])){
			$omdome = $_POST['omdome'];
			$betyg = $_POST['betyg'];
		}
		?>
		
		<section class="alla-omdomen">
		
				<h2> Här är våra tidigare kunder som skrivir omdömen om oss! </h2>
			
				<?php 
				$query = "SELECT * FROM omdomen;";
				$result = mysqli_query($dbc,$query);
				
				$i = 0;
				while($row = mysqli_fetch_array($result)){
				$i++;
				?>
				
				<div class="omdome-text"> <?php echo $row['omdome']; ?> </div>
				<div class="omdome-betyg"> Betyg: <?php echo $row['betyg']; ?> </div>
				
				<?php
				}
				?>
		
		</section>
		
	</div>
		
</main>

<?php 

include("../templates/footer.php"); // includerar footern

mysqli_query($dbc,"SET NAMES UTF8");

if(isset($_POST['omdome']) && isset($_POST['betyg'])){

	$query = "INSERT INTO omdomen (omdome,betyg) VALUES ('$omdome','$betyg');";

	mysqli_query($dbc,$query);

}
?>

</body>
</html>

<?php


?>







