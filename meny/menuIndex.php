<link rel="stylesheet" href="../css/dish.css" />

<?php

include("../templates/navigation.php"); // includerar navigationbar
require("../dbConnect.php");
?>
<div id="menu-category"> 

	<h1> Här är våran meny! </h1> 
	<p> Välj kategori: </p> 
	
	<div class="categories">
	
		<form method="GET">
			
			Kyckling <input type="checkbox" name="category" value="1" class="category-checkbox"> <br>
			Biff <input type="checkbox" name="category" value="2" class="category-checkbox"> <br>
			Fläsk <input type="checkbox" name="category" value="3" class="category-checkbox"> <br>
			Soppa <input type="checkbox" name="category" value="4" class="category-checkbox"> <br>
			Fisk <input type="checkbox" name="category" value="5" class="category-checkbox"> <br>
			Vegetariskt <input type="checkbox" name="category" value="6" class="category-checkbox"> <br>
			Efterrätt <input type="checkbox" name="category" value="7" class="category-checkbox"> <br>
			Dryck <input type="checkbox" name="category" value="8" class="category-checkbox"> <br>
		
			Starkhet: <br>
			1<input type="checkbox" name="hot" value="1">
			2<input type="checkbox" name="hot" value="2">
			3<input type="checkbox" name="hot" value="3">
			<input type="submit" value="Visa">
		
		</form>
		
	</div>

</div>

<div class="dish-container-div">

<?php
mysqli_query($dbc,"SET NAMES UTF8");

if(isset($_GET['hot']) && isset($_GET['category'])){
	// rätt siffror
	$category = "WHERE starkhet= ".$_GET['hot']." AND kategori = ".$_GET['category'];
}
else if(isset($_GET['category'])){
	// rätt siffror
	$category = "WHERE kategori = ".$_GET['category'];
}
else if(isset($_GET['hot'])){
	// rätt siffror
	$category = "WHERE starkhet= ".$_GET['hot'];
}
else{
	$category = "";
}

$query = "SELECT * FROM matratter ".$category;

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








