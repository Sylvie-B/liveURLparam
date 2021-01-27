<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Démo params url</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_GET['error']) && $_GET['error'] === '1') { ?>
    <div class="error">Attention, t'as essayé de m'enrouler en retirant un param !</div> <?php
    }
    $tab = [1, 2, 3, 4, 5, 6];
    // json encode ===> string au format json tableau
    $tab = base64_encode(json_encode('$tab'));
    ?>
    <div id="container">
        <ul>
            <li>
                <a href="coucou.php?tab=<?=$tab ?>">Mon lien 1</a>
            </li>
            <li>
                <a href="coucou.php?nom=Doe&amp;prenom=john&amp;age=36">Mon lien 2</a>
            </li>
            <li>
                <a href="coucou.php?nom=Conor&amp;prenom=Sarah&amp;age=65">Mon lien 3</a>
            </li>
            <li>
                <?php
                    $src = "<script type='text/javascript'>alert(Hello);</script>";
                ?>
                <a href="coucou.php?
                nom=Conor&amp;
                prenom=Sarah&amp;
                age=65">Mon lien 3</a>
            </li>
        </ul>
    </div>

</body>
</html>