<?php
include ('../connexion.php');
$connexion=connexion();

$requete="SELECT * FROM categorie";
$reponse=$connexion->query($requete);
$categorie=$reponse->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST["send"])){
    if(!empty($_POST["designation"]) && !empty($_POST["description"]) &&
        !empty($_POST["categorie"]) && !empty($_POST["prix"]) && !empty($_POST["tva"]) &&
        !empty($_FILES["image"])){

        $designation = htmlspecialchars($_POST["designation"]);
        $description = htmlspecialchars($_POST["description"]);
        $categorie = $_POST["categorie"];
        $prix = $_POST["prix"];
        $tva = $_POST["tva"];
        move_uploaded_file($_FILES["image"]["tmp_name"], "../images/magasin/".$_FILES["image"]["name"]);
        $image="images/magasin/".$_FILES["image"]['name'];

        $sql="INSERT INTO article VALUES(null,$categorie,'$designation',$prix,$tva,'$description','$image')";
        $res=$connexion->exec($sql);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="styleAdmin.css" rel="stylesheet" type="text/css" />
    <title>SiteWebShop</title>

</head>
<body>
<div id="container">
    <h1>Administration du site OpenShop</h1>
    <h2>Ajout d'article</h2>
    <form action="index.php" enctype="multipart/form-data" method="post">
        <fieldset>
            <legend>Ajout d'un article</legend>
            <p>
                <label>Designation : </label>
                <input type="text" id="designation" name="designation" required />
            </p>
            <p>
                <label>Description : </label>
                <input type="text" id="description" name="description" required />
            </p>
            <p>
                <label>Catégorie </label>
                <select name="categorie">
                    <?php foreach ($categorie as $id => $cat):?>
                        <option value="<?=$cat['id_categorie']?>">
                            <?=$cat['nom']?>
                        </option>
                    <?php endforeach;?>
                </select>
            </p>
            <p>
                <label>Prix : </label>
                <input type="number" id="prix" name="prix" required />
            </p>
            <p>
                <label>TVA : </label>
                <input type="number" id="tva" name="tva" value="19.6" required />
            </p>
            <p>
                <label>Image : </label>
                <input type="file" id="image" name="image" accept="image/jpeg, image/png" required />
            </p>
        </fieldset>
        <p>
            <input type="submit" name="send" id="send" value="Envoyer" />
        </p>
    </form>
</div>
</body>
</html>
