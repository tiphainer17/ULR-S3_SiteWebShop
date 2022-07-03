<?php
//DESIGN A AMELIORER
include ("connexion.php");
$connexion=connexion();

session_start();
if(isset($_POST['send'])) {
    if (isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['civilite']) &&
        isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) &&
        isset($_POST['codePostal']) && isset($_POST['ville']) && isset($_POST['pays']) && isset($_POST['telephone'])) {

        $mail=htmlspecialchars($_POST['mail']);
        $mdp=hash('sha256',$_POST['mdp']);
        $civilite=htmlspecialchars($_POST['civilite']);
        $nom=addslashes(htmlspecialchars($_POST['nom']));
        $prenom=addslashes(htmlspecialchars($_POST['prenom']));
        $adresse=addslashes(htmlspecialchars($_POST['adresse']));
        $codePostal=$_POST['codePostal'];
        $ville=addslashes(htmlspecialchars($_POST['ville']));
        $pays=addslashes(htmlspecialchars($_POST['pays']));
        $telephone=$_POST['telephone'];


        $verifExist="SELECT * FROM client WHERE email='$mail'";
        $clientExist=$connexion->query($verifExist);
        if($clientExist->rowCount()==0){
            $reqInsert="INSERT INTO client VALUES (null,'$mail','$mdp','$civilite','$nom','$prenom','$adresse',$codePostal,'$ville','$pays',$telephone,'images/clients/logo-user.png')";
            $insert=$connexion->exec($reqInsert);
            //$message="Bravo votre compte à été créer";
            //mail('$mail','Bravo',$message);
            header("location:login.php");
        } else {
            $retour="Votre compte existe déjà";
        }
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
        <h2>Créer un compte</h2>
    </header>
    <form action="creer_compte.php" method="post" id="creer-compte">
        <fieldset>
        <p>
            <label>E-mail :</label>
            <input type="mail" name="mail" required />
        </p>
        <p>
            <label>Mot de passe</label>
            <input type="password" name="mdp" required />
        </p>
        <p>
            <label>Civilité :</label>
            <select name="civilite">
                <option value="Mme.">Mme.</option>
                <option value="M.">M.</option>
            </select>
        </p>
        <p>
            <label>Nom :</label>
            <input type="text" name="nom" required />
        </p>
        <p>
            <label>Prenom :</label>
            <input type="text" name="prenom" required />
        </p>
        <p>
            <label>Adresse :</label>
            <input type="text" name="adresse" required />
        </p>
        <p>
            <label>Code postal :</label>
            <input type="number" name="codePostal" required />
        </p>
        <p>
            <label>Ville :</label>
            <input type="text" name="ville" required />
        </p>
        <p>
            <label>Pays :</label>
            <input type="text" name="pays" required />
        </p>
        <p>
            <label>Téléphone :</label>
            <input type="number" name="telephone" required />
        </p>
        <p>
            <input type="submit" name="send" value="Envoyer" />
        </p>
        </fieldset>
    </form>
</section>
<p>Merci de renseigner tout les champs</p>
<p><?=$retour?></p>
<?php require("footer.php") ?>
</body>
</html>
