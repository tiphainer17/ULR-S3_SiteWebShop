<header>
    <div class="wrap">
        <h1><a href="index.php"><img src="images/openshop_logo.png" alt="logo open shop"></a></h1>


        <nav id="nav">
            <ul>
                <?php if(isset($_SESSION['mail'])):?>
                <li>Bonjour <?=$_SESSION['civilite']?> <?=$_SESSION['nom']?> <?=$_SESSION['prenom']?></li>
                <li> <a href="deconnexion.php"> Deconnexion </a></li>
                <?php endif;?>
                <li><a href="index.php">accueil</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="creer_compte.php">créer compte</a></li>
                <li><a href="panier.php">panier</a></li>
            </ul>
        </nav>

        <form id="search" action="recherche.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="searchText">Rechercher :</label>
                <input id="searchText" name="query" type="text" value="" />
                <input id ="searchBtn" type="submit" class="bouton" value="OK" />
            </p>
        </form>


        <nav id="menu-categorie">
            <ul>
                <li class="smenu"><a href="categorie.php?cat=all">tous les produits</a></li>
                <li class="smenu"><a href="categorie.php?cat=1">vetements</a></li>
                <li class="smenu"><a href="categorie.php?cat=2">accessoires</a></li>
                <li class="smenu"><a href="categorie.php?cat=3">posters</a></li>
                <li class="smenu"><a href="categorie.php?cat=4">dvd</a></li>
            </ul>
        </nav>
    </div>
</header>
