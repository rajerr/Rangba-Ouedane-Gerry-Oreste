<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Exercice 1</title>

</head>
<body>
	<form method="POST">
		Donner une valeur
		<input type="text" name="nombre">
		<input type="submit" name="bouton" value="ok">
	</form>

	<?php
		$tp="";
		if (isset($_POST['nombre'])){
			$n = intval($_POST['nombre']);
			$tabA = array("inferieur" => array(), 
						  "superieur" => array());

			if ($n <= 10000){
				echo "veuillez saisir un nombre supérieur à 10000";
			}
			else{
				$t = array();
				$k=0;
				for ($i=1; $i <= $n; $i++){
					$s = 0;
					for ($j=1; $j<=$i; $j++){
						if (($i%$j) == 0){
							$s++;
						}
					}
						if ($s == 2){
							$t[$k] = $i;
							$k++;
					}
				}

			}
			$_SESSION[$tp] = $t;
		}

	// ICI DEBUTE LA PAGINATION DU TABLEAU $_SESSION[$tp]
	if (isset($_SESSION[$tp])) {
	$NbreParPage = 100;
	$valeurTotal = sizeof($_SESSION[$tp]);
	$NbreDePage = ceil($valeurTotal / $NbreParPage);
	
		if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
		{
			$pageActuelle=$_GET['page'];
			
		}
		else{ $pageActuelle=1;
		}
		// Tu as en pas besoin
		// $indiceDebut = ($pageActuelle - 1) * $NbreParPage;
		// $indiceFin = $indiceDebut + $NbreParPage;
		echo "<br/>";echo "<br/>";
		echo'
		<div style=" float: left ;width: 40%; height: 40%; background-color: white;">
		<table style="width:100%; margin-letf:30%">
		<legend style="text-align: center"> <strong>Nombres Premiers</strong></legend>
		<tr>';
		for($i=($pageActuelle-1)*100;$i<$pageActuelle*100;$i+=10)
		{
			for($j=$i;$j<=$i+9;$j++)           
			{
				
				if($j>=sizeof($_SESSION[$tp]))
				{
					break;
				}
				echo'<td style="border: 2px solid grey;">'.$_SESSION[$tp][$j].'</td>';
	
			}         
			echo'</tr>';
		} 
		echo'</table>'; 

		for ($i=1; $i <=$NbreDePage ; $i++) { 
	
			echo ' <a href="Exercice1.php?page='.$i.'">'.$i.'</a> ';
		}
	}
	echo "<br><br><br>";
	// fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff

		


		$somme = 0;
		for ($i = 0; $i < count($t); $i++){
			$somme += $t[$i]; 
		}

		$moyenne = $somme / count($t);
		echo "La moyenne est:  " .$moyenne;

		echo "<br/>";
		echo "<br/>";

	
		$k=0;
		$l=0;
		for ($i = 0; $i < count($t); $i++){
			if ($t[$i] <= $moyenne){

				$tabA["inferieur"][$k] = $t[$i];
				$k++;

			}

			else{
				$tabA["superieur"][$l] = $t[$i];
				$l++;
			
		}

	}

			echo "les valeurs inférieurs à la moyenne sont: ";
			echo "<br/>";
			echo "<br/>";
			
			for ($i = 0; $i< count($tabA["inferieur"]); $i++){
				echo $tabA["inferieur"][$i]. '  ';
			}

			echo "<br/>";
			echo "<br/>";
	
			echo "les valeurs superieurs à la moyenne sont: ";
			echo "<br/>";
			echo "<br/>";
			for ($i = 0; $i< count($tabA["superieur"]); $i++){
				echo $tabA["superieur"][$i]. '  ';
			}
	

	 ?>

</body>
</html>