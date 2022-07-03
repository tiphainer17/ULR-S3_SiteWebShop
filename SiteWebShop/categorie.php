<?php
include ("connexion.php");
$connexion = connexion();
include ("utile.php");
session_start();

if(!empty($_GET['cat'])){
    $categorie = $_GET['cat'];

    if($categorie == "all"){
        $requete = "SELECT * FROM article";
        $reponse = $connexion->query($requete);
        $articles=$reponse->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $requete = "SELECT * FROM article WHERE id_categorie=$categorie";
        $reponse = $connexion->query($requete);
        $articles=$reponse->fetchAll(PDO::FETCH_ASSOC);
    }
    $cookieCat=setcookie("CategorieCookie",$categorie);
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
    <header>
        <h2>Catégorie</h2> <p>n°<?=$categorie?></p>
    </header>
    <!--Affichage de 3 articles au hasard -->
    <ul id="product-list">
        <?php foreach($articles as $article => $infos): ?>
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

