<?php
include ("connexion.php");
$connexion=connexion();
session_start();
if(isset($_POST['send'])) {
    if(isset($_POST['mail']) && isset($_POST['mdp'])){
        $mail=htmlspecialchars($_POST['mail']);
        $mdp=hash('sha256',$_POST['mdp']);

        $req="SELECT mot_de_passe FROM client WHERE email='$mail'";
        $res=$connexion->query($req);
        $verif=$res->fetch(PDO::FETCH_ASSOC);

        if($verif['mot_de_passe']==$mdp){
            $requete="SELECT * FROM client WHERE email='$mail'";
            $reponse=$connexion->query($requete);
            $infos=$reponse->fetchAll(PDO::FETCH_OBJ);

            foreach($infos as $nom => $info){
                $civilite = $info->civilite;
                $nom = $info->nom;
                $prenom = $info->prenom;
                $id= $info->id_client;
            }


            $_SESSION['civilite']=$civilite;
            $_SESSION['nom']=$nom;
            $_SESSION['prenom']=$prenom;
            $_SESSION['id']=$id;
            $_SESSION['mail']=$mail;
            header('location:index.php');
        } else {
            $message='Mot de passe ou mail incorrect';
        }
    } else {
        $message="Vous n'avez pas rempli tous les champs";
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
        <h2>Identification</h2>
    </header>
    <form action="login.php" method="post" id="login">
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
                <input type="submit" name="send" value="Valider" />
            </p>
        </fieldset>
    </form>
</section>
<?php require("footer.php") ?>
</body>
</html>

