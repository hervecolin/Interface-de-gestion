<!--
Theme Name: Interface gestion
Theme URI: https://pooTableauClient
Author: H.COLIN
Author URI: https://H.COLIN
Use it to make something cool, have fun, and share what you've learned with others.
-->
<!DOCTYPE html>
<html lang="fr">
<!--la langue ! -->

<head>
         <meta charset="utf-8"/>
		 <meta name="viewport" content"width=device-width, initial-scale=1">
		 <link rel="stylesheet" style="text/css" href="styleTableau.css"/> <!--link css-->
			<title>Tableau gestion client</title>
</head>
<body>
    <p><a href="formulaireClient.php" class="return" >Retour formulaire client</a></p>  <!--balise de retour formulaire-->
</body>
    <h1>Tableau Interface gestion client</h1>      <!--Mon titre-->

<?php

require_once ("classe/tableau.php");       //recupération de ma class client POO
session_start();
                                 // CONNEXION A LA BASE DE DONNEES OK "RUNCATE TABLE `table`"pour vider les id lors des tests !
    try{
        $user = 'root';
        $pass= '';
        $connect = new PDO ('mysql:host=localhost;dbname=interfacegestion',$user,$pass);  //new pour initialiser et mes variables de connection $connect!!
        	 echo ' La base de données est bien connecté.<br/>';	

    	$nom = $_POST['nom'];
    	$prenom = $_POST['prenom'];
    	$adresse = $_POST['adresse'];
    	$codePostal = $_POST['codePostal'];
    	$mail = $_POST['mail'];
    	$telephone = $_POST['telephone'];
    	$numClient = $_POST['numClient'];
    	$numCommande = $_POST['numCommande'];
    	$quantite = $_POST['quantite'];
    	$prix = $_POST['prix'];
        //var_dump($_POST); //I like to see what I push !
    }
    catch (PDOException $e){                           //mon catch pour les erreurs de connection
	    echo "probléme : ".$e;
    }
    try {
        $connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//appel de ma DB
        $connect->beginTransaction();
    	//requete pour entrer les données dans la base insert into !
        $requete= "INSERT INTO interfacegestion ( nom, prenom, adresse, codePostal, mail, telephone, numClient, numCommande, quantite, prix) VALUES ('".$nom."','".$prenom."', '".$adresse."', '".$codePostal."', '".$mail."', '".$telephone."', '".$numClient."', '".$numCommande."', '".$quantite."', '".$prix."')";                                 //syntaxe tordue('".$x----."') !
        $connect->exec($requete);
        $connect->commit();                     //pour excécuter la requète
         echo  'Saisie enregistrée dans la base de données.<br/>';
        }
    catch (PDOException $e){                              //mon exception avec rollback
	   $connect->rollback();
	    echo "erreur :".$e->getmessage();
	   }
		if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom']))&&(isset($_POST['adresse'])&& !empty($_POST['adresse']))&&(isset($_POST['codePostal'])&& !empty($_POST['codePostal']))&&(isset($_POST['mail'])&& !empty($_POST['mail']))&&(isset($_POST['telephone'])&& !empty($_POST['telephone']))&&(isset($_POST['numClient']) && !empty($_POST['numClient']))&&(isset($_POST['numCommande'])&& !empty($_POST['numCommande'])) &&(isset($_POST['quantite'])&& !empty($_POST['quantite']))&&(isset($_POST['prix'])&& !empty($_POST['prix']))) //test pour obliger le "user" à renseigner le formulaire avec isset et !empty
        {
      	 echo'Test de validation formulaire ok le programme continue...'."<br/>";
        }
    	else{
      	 echo '<a href="FormulaireClient.php">Vous devez renseigner le formulaire comptabilité ! cliquer sur ce lien SVP</a><br/>'; //sinon retour au formulaire !
        }
                                           // ma syntaxe pour valider mes nouvelles variables

       $tableau = new tableau ($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['codePostal'],  // création du tableau avec new !
       $_POST['mail'],$_POST['telephone'],$_POST['numClient'],$_POST['numCommande'],$_POST['quantite'],$_POST['prix']);

                                          //affectation de ma SESSION

       $_SESSION['tableau'][]=$tableau;        //synthax crochet ouvert []  pour ma session !


       echo "<table>";                        //ouverture du tableau HTML

       echo "<tr><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Code Postal</th><th>Email</th><th>Téléphone</th><th>
                N° Client</th><th>N° Commande</th><th>Quantité</th><th>Prix</th></tr>";   //mes titres table

        foreach($_SESSION['tableau'] as $tableau){     // mon foreach qui affiche mes attributs get...

           echo "<tr><td>".$tableau->getNom()."</td>" ."<td>".    //ma concat colonne <td> et lignes <tr> qui affiche mon result !
             $tableau->getPrenom()."</td> "."<td>".$tableau->getAdresse()
             ."</td>"."<td>".$tableau->getCodePostal()."</td>"."<td>".$tableau->getMail()."</td>"."<td>".
             $tableau->getTelephone()."</td>"."<td>".$tableau->getNumClient()."</td>"."<td>".$tableau->getNumCommande()."</td>"
             ."<td>".$tableau->getQuantite()."</td>"."<td>".$tableau->getPrix()."</td></tr>";
        }
       echo "</table>";                            //mon echo fin de tableau

?>
<footer>
    <div class="footer">
        &copy; <?=date ("d.m.Y") ?>  - H.COLIN <!--  en php voir synt affichage dynamique de l'heure & copy copyright !-->
    </div>
</footer>

<html>
