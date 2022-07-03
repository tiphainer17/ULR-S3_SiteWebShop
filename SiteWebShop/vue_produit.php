<?php
include ("connexion.php");
$connexion = connexion();

session_start();

if(!empty($_GET['article'])){
    $numArticle = $_GET['article'];

    $requete = "SELECT * FROM article WHERE id_article=$numArticle";
    $reponse = $connexion->query($requete);
    $article = $reponse->fetch(PDO::FETCH_ASSOC);
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
<article id="detail-produit">
    <header><h2><?=$article['designation']?></h2></header>
    <img src="<?=$article['img_article']?>" alt="<?=$article['img_article']?>"></img>
    <p><?=$article['description']?></p>
    <p><strong><?=$article['prix']?>€</strong></p>
    <form id="form-panier" action="panier.php" metohd="post">
        <label for="quantite">Quantité : </label>
        <select name ="quantite">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" name="send" value="Ajouter au panier"/>
    </form>
</article>
</section>
<?php require("footer.php") ?>
</body>
</html>
