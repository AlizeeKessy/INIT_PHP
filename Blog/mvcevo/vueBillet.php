<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Mon blog</title>
</head>
<body>
    <div id="global">
        <header>
            <a href="index.php">
                <h1 id="titreBlog">Mon Blog</h1>
            </a>
            <p>Hello et bienvenue !!!!</p>
        </header>
        <div id="contenu">
            <?php if (isset($billet)): ?>
                <article>
                    <header>
                        <h1 class="titreBillet"><?= htmlspecialchars($billet['titre']) ?></h1>
                        <time><?= htmlspecialchars($billet['date']) ?></time>
                    </header>
                    <p><?= nl2br(htmlspecialchars($billet['contenu'])) ?></p>
                </article>
                <hr>
                <h2>Commentaires</h2>
                <?php if (isset($comments) && !empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                        <p><?= htmlspecialchars($comment['auteur']) ?> dit :</p>
                        <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
                        <hr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Aucun commentaire pour ce billet.</p>
                <?php endif; ?>
            <?php else: ?>
                <p>Erreur : billet non trouvé.</p>
            <?php endif; ?>
        </div>
        <footer id="piedBlog">Blog exercice</footer>
    </div>
</body>
</html>