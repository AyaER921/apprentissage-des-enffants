<?php 
include '../database/db.php';

try {
	// Activer le rapport d'erreurs MySQL
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	mysqli_set_charset($conn, "utf8");
    // Vérifier si l'ID est présent et numérique
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        header("Location: animaux.php");
        exit();
    }

    // Nettoyer l'ID
    $id = (int)$_GET['id'];
    
    // Utiliser une requête préparée pour plus de sécurité
    $query = "SELECT * FROM animaux WHERE id = ?";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        throw new Exception("Erreur de préparation de la requête: ".$conn->error);
    }
    
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $animal = $result->fetch_assoc();
    
    if (!$animal) {
        header("Location: animaux.php");
        exit();
    }
    
} catch (Exception $e) {
    die("Erreur: ".$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $animal['nom'];?></title>
	<link href="style_projet.css" rel="stylesheet">
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="animal-page">
	<div class= "info_animal">
		<div class="animal-header">
			<h1><?php echo $animal['nom'];?></h1>
			<p><?php echo $animal['sous_titre'];?></p>
			<img src="../ressources/images/<?php echo $animal['image'];?>" alt ="<?php echo $animal['nom'];?>" class="animal-image">
			<?php if (!empty($animal['son'])):?>
				<audio controls class="animal-audio">
					<source src="../ressources/sons/<?php echo $animal['son'];?>" type="audio/mpeg">
						votre navigateur ne supporte pas l'element audio.
					</audio>
				<?php endif;?>
		</div>
		<div class ="facts-section">
			<h2>Facts</h2>
			<div class="fact-title1">
				<span class="fact-title">size</span><br>
				<?php if(!empty($animal['taille'])):?>
					<p><?php echo $animal['taille'];?></p>
				<?php endif;?>
			</div>

			<div class="fact-title1">
				<span class="fact-title">food</span><br>
				<?php if(!empty($animal['nourriture'])):?>
					<p><?php echo $animal['nourriture'];?></p>
				<?php endif;?>
			</div>

			<div class="fact-title1">
				<span class="fact-title">habitat</span><br>
				<?php if(!empty($animal['habitat'])):?>
					<p><?php echo str_replace(',', ',<br>', $animal['habitat']);?></p>
				<?php endif;?>
			</div>
			<div class="fact-title1">
				<span class="fact-title">zone geographique</span><br>
			    <?php if (!empty($animal['zone_geographique'])):?>
			    <p><?php echo $animal['zone_geographique'];?></p>
			   <?php endif;?>
		    </div>
		    <div class="fact-title1">
		    	<span class="fact-title">type d'alimentation</span><br>
		    	<?php if (!empty($animal['type_alimentation'])) :?>
			    <p><?php echo $animal['type_alimentation'];?></p>
			   <?php endif;?>
			</div>
			<div class="fact-title1">
		    	<span class="fact-title">Informations</span><br>
		    	<?php if (!empty($animal['informations_complementaires'])) :?>
			    <p><?php echo $animal['informations_complementaires'];?></p>
			   <?php endif;?>
			</div>
		</div>
    </div>
</body>
</html>


			
