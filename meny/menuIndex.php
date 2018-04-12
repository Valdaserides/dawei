<link rel="stylesheet" href="../css/dish.css" />

<?php

include("../templates/navigation.php"); // includerar navigationbar
require("../dbConnect.php");
?>
<div id="menu-category"> <h1> Här är våran meny! </h1> <p> Välj kategori: </p> </div>
<div class="dish-container-div">

<?php
mysqli_query($dbc,"SET NAMES UTF8");

$query = "SELECT * FROM matratter;";
$result = mysqli_query($dbc,$query);

$n = 0;
while($row = mysqli_fetch_array($result)){
	$n++;
	?>

	<!-- PHP = bryt float varannan rätt -->
	<div class="dish-container <?php if($n%2==1){echo "break";};?>">
	
	<img src="../imgs/<?php echo $row['bild']; ?>" class="dish-image">

	<div class="dish-name"> <!-- skriv ut n och rättens namn -->
		<p><?php echo $n . ". " .$row['namn'];?> </p>
	</div>
	
	<?php // Skriv ut antal chilis som rätten är "hot"
	$hotness = $row['starkhet'];	
	for($i = 0 ; $i < $hotness ; $i++){?>
		<img class="chili" width="25px" src="../imgs/chili.png" />
	<?php } ?>
	
	<div class="dish-desc"> 
		<p><?php echo $row['beskrivning'];?></p>
	</div>
	
	<div class="dish-price"> 
		<p> <?php echo $row['pris'];?>:-</p>
	</div>
	
	</div>
	
	
<?php	
}	 // avsluta while-loop
?>
</div>
<?php
include("../templates/footer.php"); // includerar footern

?>

</body>
</html>








