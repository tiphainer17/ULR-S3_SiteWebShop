<?php
include ("utile.php");
include ("connexion.php");
$connexion = connexion();

session_start();

$cookieCat=$_COOKIE['CategorieCookie'];
if(isset($cookieCat) && $cookieCat != "all"){
    $requete="SELECT * FROM article WHERE id_categorie=$cookieCat ORDER BY RAND() LIMIT 3";
    $resultat=$connexion->query($requete);
    $articles3=$resultat->fetchAll(PDO::FETCH_ASSOC);
} else {
    $requete = "SELECT * FROM article ORDER BY RAND() LIMIT 3";
    $resultat=$connexion->query($requete);
    $articles3=$resultat->fetchAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
  	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>SiteWebShop</title>

</head>
<body>
<!-- DEBUT de la page -->
<?php require ("header.php"); ?>
	<section>
				

				<header>Bienvenue <span class="ss-titre">Nous sommes le ?????? </span></header>
				<p>La boutique en ligne <strong>openSHOP</strong> est un travail réalisé par <em>Thomas Jouannic</em> & <em>Jérome Saunier</em> 
				puis modifié et adapté <strong>au cours de Sites Web Avancés</strong>.</p>
				<p>Dans la partie haute, vous trouverez un moyen pour vous identifiez ou créer un compte si vous n'en n'avez aucun. Le champ de recherche 
				vous permet d'afficher simplement les produits correspondants à ce que vous souhaitez. Vous pouvez aussi naviguer entre les différentes 
				catégorie de produits en cliquant sur celle que vous désirez voir.</p>
				<p>Bonne naviguation !</p>
	</section>
	<section>
		<header>
					<h2>Au hasard...</h2>
		</header>
				<!--Affichage de 3 articles au hasard -->
        <ul id="product-list">
            <?php foreach($articles3 as $article => $infos): ?>
            <li class="product">
                <p><?=$infos['designation']?></p>
                <img src="<?=$infos['img_article']?>" alt="<?=$infos['img_article']?>"></img>
                <p><strong><?=$infos['prix']?> €</strong></p>
                <p><?=tronquer_texte($infos['description'])?></p>
                <a href="vue_produit.php?article=<?=$infos['id_article']?>"> Voir les détails...</a>
            </li>
            <?php endforeach;?>
        </ul>
				
	</section>
<?php require("footer.php") ?>
</body>
</html>