<?php
// Démarrer la session
session_start();

// Configuration de la base de données
$host = "127.0.0.1"; // Ou "localhost"
$dbname = 'fil_rouge';
$username = 'root';
$password = '';

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérifier si l'utilisateur est connecté
$username = null;
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // Récupération des informations de l'utilisateur
    $sqlUser = "SELECT u_pseudo, tu_libelle FROM utilisateurs u 
                JOIN type_utilisateur t ON u.tu_id = t.tu_id
                WHERE u.u_id = :userId";  // Correction de l'erreur sur la colonne
    $stmtUser = $pdo->prepare($sqlUser);
    $stmtUser->execute(['userId' => $userId]);
    $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $username = $user['u_pseudo'];  // Correction de l'accès à la colonne
        $_SESSION['user_type'] = $user['tu_libelle'];  // Stocker le type utilisateur
    }
}

// Vérifier si l'utilisateur est Commercial ou Admin
$isCommercialOrAdmin = isset($_SESSION['user_type']) && in_array($_SESSION['user_type'], ['Commercial', 'Admin']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Heaven Of BoardGames</title>
</head>

<body>

<nav class="navbar navbar-expand-lg 
    <?php
    if (isset($_SESSION['user_type'])) {
        switch ($_SESSION['user_type']) {
            case 'Commercial':
            case 'SAV':
                echo 'bg-success'; // Vert pour Commercial et SAV
                break;
            case 'Admin':
                echo 'bg-danger'; // Rouge pour Admin
                break;
            default:
                echo 'bg-body-tertiary'; // Couleur par défaut
                break;
        }
    } else {
        echo 'bg-body-tertiary'; // Couleur par défaut si non connecté
    }
    ?>">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Heaven of BoardGames</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <?php if ($isCommercialOrAdmin): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="addGames.php">Ajouter un produit</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="games.php">Toutes les catégories</a></li>
                            <li><a class="dropdown-item" href="Categorie.php">Ajouter une catégorie</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="d-flex">
                <?php if ($username): ?>
                    <span class="navbar-text me-3">Bienvenue, <?= htmlentities($username) ?>!</span>
                    <a href="deconnexion.php" class="btn btn-danger">Se déconnecter</a>
                <?php else: ?>
                    <a href="connexion.php" class="btn btn-outline-primary me-2">Login</a>
                    <a href="inscription.php" class="btn btn-primary">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>


<header>
    <section id="hSectionSessionNav">
 
    </section>
    <section id="hSectionTop">
        <aside id="hAsideLogo">
            <a href="testindex.php"><img src="images/logo.png" alt="" id="hLogo"></a>
        </aside>
        <article id="hArticleSearchbar">

            <h1 id="logoTitre">Heaven of BoardGames</h1>

            <form class="d-flex" role="search" id="hSearch" method="get" action="games.php">
                <input class="form-control me-2" type="search" id="hChampSearch" placeholder="Rechercher un jeu..." aria-label="Search" name="search">
                <button class="btn btn-outline-success" id="hSearchButon" type="submit">Rechercher</button>
            </form>

        </article>
        <article id="hArticlePanierCompte">
            <a class="btn btn-outline-success" id="hMoncompteButon" href="connexion.php">Mon Compte</a>
            <button class="btn btn-outline-success" id="hMonPanierButon">Mon Panier</button>
        </article>
        <aside id="hReseauxTop">
            <h6 id="titreRS">Nos réseaux</h6>
            <a href="#"><img src="images/instagram.png" class="hRSLogo" alt="InstagramLogo"></a>
            <a href="#"><img src="images/facebook.png" class="hRSLogo" alt="FacebookLogo"></a>
            <a href="#"><img src="images/youtube.png" class="hRSLogo" alt="YoutubeLogo"></a>
            <a href="#"><img src="images/tic-tac (1).png" class="hRSLogo" alt="Tik-TokLogo"></a>
            <a href="#"><img src="images/tic.png" class="hRSLogo" alt="TwitchLogo"></a>
        </aside>
    </section>
    <section id="hSectionNavBar">
        <nav id="hNavbar">
            <a href="#">
                <h3 class="hLiensNav">Jeux D'ambiances</h3>
            </a>
            <h3 class="hPipe">|</h3>
            <a href="jeux_enfants.php">
                <h3 class="hLiensNav">Jeux Enfants</h3>
            </a>
            <h3 class="hPipe">|</h3>
            <a href="#">
                <h3 class="hLiensNav">Jeux Familiaux</h3>
            </a>
            <h3 class="hPipe">|</h3>
            <a href="#">
                <h3 class="hLiensNav">Jeux Initiés</h3>
            </a>
            <h3 class="hPipe">|</h3>
            <a href="#">
                <h3 class="hLiensNav">Jeux Experts</h3>
            </a>
        </nav>
    </section>
    <a href="#hSectionTop"><button id="buttonTop" class="fixed-bottom">↑</button></a>
</header>
    <main>
        <?php include 'includes/carousel.php';



        // Requête SQL pour récupérer les informations des jeux 
        $sql = "SELECT j.jeu_id,
        j.jeu_nom AS Nom, 
        j.jeu_img AS Photo, 
        j.jeu_prix, 
        j.jeu_EAN AS EAN, 
        j.jeu_dte_creation, 
        j.jeu_temps, 
        j.jeu_qte_stc, 
        j.jeu_note,
        p.pays_nom AS Pays,
        c.ctg_nom AS Categorie,
        a.age_nom AS Age,
        m.m_nom AS Mecanisme
        FROM Jeu j
        INNER JOIN Pays p ON j.pays_id = p.pays_id
        INNER JOIN Mecanisme m ON j.m_id = m.m_id
        INNER JOIN Categories c ON j.ctg_id = c.ctg_id
        INNER JOIN Age a ON j.age_id = a.age_id
        Order by jeu_id desc";

        // Exécution de la requête
        $jeux = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        ?>
        <section id="mSectionArticle">
            <article id="mArticleLeft">
                <div class="row justify-content-center">
                    <?php if (count($jeux) > 0): ?>
                        <?php foreach ($jeux as $jeu):  ?>
                            <?php if ($jeu['jeu_qte_stc'] > 0) {
                        $stockMessage = "Produit en stock";
                    } else {

                        $stockMessage = "Produit en rupture de stock";
                    }?>
                            <div class="col-3 m-4">
                                <a href="games.php?id=<?= urlencode($jeu['jeu_id']) ?>" class="text-decoration-none">
                                    <div class="card p-3" id="classLeft">
                                        <img src="<?= htmlentities($jeu['Photo']) ?>" alt="<?= htmlentities($jeu['Nom']) ?>" class="card-img-top" style="height: auto; width: 100%; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= htmlentities($jeu['Nom']) ?></h5>
                                            <p class="card-text" id="price"><strong>Prix TTC : </strong><?= $jeu['jeu_prix'] ?>€</p>
                                            <p class="card-text" id=""><?= htmlentities($stockMessage) ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>

                </div>
            </article>
            <article id="mArticleRight">

            </article>
        </section>
    </main>
  

    <footer>
        <section id="fSectionLeft">
            <aside id="fAdSociete">
                <h5 id="titreAD">Heaven of BoardGames</h6>
                    <h6>2 Rue des Meeples</h6>
                    <h6>194360, BoardGamesCity</h6>
            </aside>

            <article id="fCguFaq">
                <a href="#" class="fLiens">
                    <h5 id="cfuLien">Conditions générales de vente</h5>
                </a>
                <a href="#" class="fLiens">
                    <h5 id="faqLien">Foire aux questions</h5>
                </a>
            </article>
        </section>
        <section id="fSectionMid">
            <article id="fNavReseaux">
                <h5>#Retrouvez nous sur nos réseaux sociaux</h5>
                <nav id="fNavRS">
                    <a href="#"><img src="images/instagram.png" class="fRSLogo" alt="InstagramLogo"></a>
                    <a href="#"><img src="images/facebook.png" class="fRSLogo" alt="FacebookLogo"></a>
                    <a href="#"><img src="images/youtube.png" class="fRSLogo" alt="YoutubeLogo"></a>
                    <a href="#"><img src="images/tic-tac (1).png" class="fRSLogo" alt="Tik-TokLogo"></a>
                    <a href="#"><img src="images/tic.png" class="fRSLogo" alt="TwitchLogo"></a>
                </nav>
            </article>
            <aside id="fCopyright">
                <h6 id="copyright">Copyright © 2025. Tous droits réservés <span id="marque">Heaven of BoardGames</span></h6>
            </aside>
        </section>
        <section id="fSectionRight">
            <article id="fArticlePL">
                <a href="#" class="fLiens">
                    <h5 id="paiementLien">Paiement</h5>
                </a>
                <a href="#" class="fLiens">
                    <h5 id="livraisonLien">Livraison</h5>
                </a>
                <a href="#" class="fLiens">
                    <h5 id="aproposLien">À propos de nous</h5>
                </a>
            </article>
        </section>
    </footer>


    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>
