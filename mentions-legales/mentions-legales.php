<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flore Limouzin ostéopathe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../common/styles5.css">
    <link rel="icon" href="../sources/images/icon.png">

</head>
<body>
    <?php require"../common/menu.php";?>
    <section id="mentions-legales">
        <p style="text-align:center">MENTIONS LEGALES :</p>
        <p style="text-align:justify">Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href="http://www.flore-limouzin-osteopathe.fr" target="_blank">www.flore-limouzin-osteopathe.fr</a> les informations suivantes :</p>
        <p style="text-align:justify">Statut du propriétaire : <strong><?=$statut_propriétaire?></strong><br />
        Le Propriétaire est : <strong><?=$proprietaire?></strong><br />
        Adresse postale du propriétaire : <strong><?=$adresse_propriétaire?></strong><br />
        <br />
        Le Créateur du site est : <strong><?=$createur?></strong><br />
        Le Responsable de la  publication est : <strong><?=$responsable_publication?></strong><br />
        Contacter le responsable de la publication : <strong><a href=<?="mailto:".$mail_responsable_publication?>><?=$mail_responsable_publication?></a></strong><br />
        Le responsable de la publication est une<strong> <?=$type_responsable_publication?></strong><br />
        <br />
        Le Webmaster est  : <strong><?=$webmaster?></strong><br />
        Contacter le Webmaster :  <strong><a href=<?="mailto:".$mail_webmaster."?subject=Contact%20a%20partir%20des%20mentions%20légales%20via%20le%20site%20www.flore-limouzin-osteopathe.fr"?>>olivierchatelin@outlook.com</a></strong><br />
        L’hebergeur du site est : <strong><?=$nom_hebergeur." ".$adresse_hebergeur?></strong><br />
        <strong>CREDIT photos: </strong> <strong> <a href="https://www.istockphoto.com/">iStock</a></strong><br />
        <p style="text-align:justify"> </p>
        <p style="text-align:justify"><strong>1. Accessibilité :</strong><br />
        <br />
        Le site www.flore-limouzin-osteopathe.fr est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, www.flore-limouzin-osteopathe.fr s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, www.flore-limouzin-osteopathe.fr ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p>
        <p style="text-align:justify"><strong>2. Propriété intellectuelle :</strong></p>
        <p style="text-align:justify"><br />
        <?=$proprietaire?> est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
        Toute reproduction totale ou partielle du site www.flore-limouzin-osteopathe.fr, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de <?=$proprietaire?>, propriétaire du site à l'email : <?=$mail_responsable_publication?>, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
        <p style="text-align:justify"><br />
        <strong>3. Liens hypertextes:</strong><br />
        <br />
        Le site www.flore-limouzin-osteopathe.fr contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Flore Limouzin. Cependant, Flore Limouzin n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
    </section>
    <?php require"../common/footer.php";?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../common/script2.js"></script>
</body>
</html>
