<!DOCTYPE html>
<html lang="fr">         
<!--la langue ! -->
<meta charset="utf-8"/>
<head>
         <meta charset="utf-8"/> 
		  <meta name="viewport" content"width=device-width, initial-scale=1">
			<meta name="description "content = "" !">
		     <link rel="stylesheet" style="text/css" href="styleTableau.css"/> <!--link css-->
</head>
<body>
<?php

require_once ("classe/Tableau.php");

echo "<h1>";
$tableau = new Tableau ("Colin","Hervé","42 rue Jules Méline",44300,"hervcolin@yahoo.fr","06 63 06 36 78",0001114,12,2,121.10);

echo $tableau->getInfos();  //j'affiche le tableau 1..
echo $tableau->setPrenom ("Paul");//je change le prenom et le nom
echo $tableau->setNom ("Durand")."<br/>";
echo $tableau->getInfos(); //j'affiche le resultat !!!!

echo "</h1>";

?> 
</body>
</html>