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
		       <link rel="stylesheet" style="text/css" href="styleTableau.css"/> <!--link css-->
			    <title>Formulaire client  HC</title> 
</head>
<body>
    <h1>Interface Gestion Client </h1>
    <br/>
    <br/>                                               <!--un peu chavalier ces <br/>-->
    <br/>
    <form method ="POST" action ="cible2.php">      <!--mon formulaire linker vers ma cible-->
      <fieldset class="act">
        <legend>Client</legend><br/>  
        <label for="name">Nom </label>
        <input type="text" name="nom" class="nom" />
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" class="prenom" />
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="adresse" />
        <label for="codePostal">Code postal</label>
        <input type="text" name="codePostal" class="codepostal" />
        <label for="mail">Email</label>
        <input type="text" name="mail" class="mail" />
        <label for="telephone">Téléphone</label>
        <input type="text" name="telephone" class="telephone" />
        <p><br/>
        <label for="numClient">N° Client</label>
        <input type="text" name="numClient" class="numClient" />
        <label for="numCommande">N° Commande</label>
        <input type="text" name="numCommande" class="numCommande" />
        <label for="quantite">Quantité</label>
        <input type="text" name="quantite" class="quantite" />
        <label for="quantite">Prix</label>
        <input type="text" name="prix" class="prix" /><br/><br/>
        <input type="submit" value="Valider">
        <input type="reset" name="reset" value="Reset">
        </p>
     </fieldset>
   </form>
</body>
<footer class="footer">      
    &copy; <?=date ("d.m.Y") ?>  - H.COLIN    
</footer>
</html>