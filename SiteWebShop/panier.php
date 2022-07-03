<?php
session_start();
include ("connexion.php");
$connexion = connexion();

//MARCHE PAS
if(isset($_POST['send'])){
    if(isset($_POST['quantite'])){
        $qte=$_POST['quantite'];
        $articlen=array('id_article'=>$_GET['id_article'], "qte"=>$_POST['quantite']);
        $panier= array(array_push($articlen) );
        $_SESSION['panier']=$panier;

        $requete="SELECT designation, prix FROM article WHERE id_article=".$_GET["id_article"];
        $resultat=$connexion->query($requete);
        $art=$resultat->fetchAll(PDO::FETCH_ASSOC);
    }
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
        <h2>Panier</h2>
    </header>
    <div id="empty-cart">
        <?php if(!isset($_POST['send'])):?>
            <img src="images/poubelle.png" alt="images/poubelle.png"></img>
            <p>Votre panier est vide</p>
        <?php else:?>
            <table id="cart-table">
                <th>
                    <?php foreach($art as $cle => $infos):?>
                        <td><?=$infos['designation']?></td>
                        <td><?=$infos['prix']?>€</td>
                    <?php endforeach;?>
                </th>
            </table>
            <p id="total-achat">Total : €</p>
        <?php endif;?>
    </div>



</section>
<?php require("footer.php") ?>
</body>
</html>