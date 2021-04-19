<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Flore Limouzin, ostéopathe à Pessac, soin nouveau-né, soin femme enceinte, périnatalité">
    <meta name="description" content="Flore Limouzin,ostéopathe à Pessac, spécialisée en périnatalité prend en charge également tout type de patient-RDV en ligne ou par tel au  05 56 39 68 11">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Flore Limouzin ostéopathe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="common/styles5.css">
    <link rel="icon" href="sources/images/icon.png">
</head>
<body>
<?php require "common/menu.php" ?>
    <div id="alert" class="<?=$message_display?>">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?=$message_title?></strong><?=$message_alert?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <section id="hero">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src=<?=$photo1?> class="d-block w-100 img-car-1" alt=<?=$alt_photo1?>>
                    <div class="carousel-caption text-dark perso-bg-white">
                        <h5>Ostéopathe à Pessac</h5>
                        <p class="d-none d-md-block">D.U de périnatalité</p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/votre-osteopathe/" class="btn btn-outline-perso-green link">Flore Limouzin</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?=$photo2?>" class="d-block w-100 img-car-2" alt=<?=$alt_photo2?>>
                    <div class="carousel-caption text-dark perso-bg-white">
                        <h5>Chez le nouveau né</h5>
                        <p class="d-none d-md-block">Accompagner le nouveau-né dans son adaptation à la vie extra utérine.</p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#nouveau-ne" class="btn btn-outline-perso-green link">En savoir plus</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?=$photo3?>" class="d-block w-100 img-car-3" alt=<?=$alt_photo3?>>
                    <div class="carousel-caption text-dark  perso-bg-white">
                        <h5>Chez la femme enceinte</h5>
                        <p class="d-none d-md-block">Accompagner le corps de la future maman à s’adapter aux nouvelles contraintes mécaniques et hormonales liées à son état.</p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#femme-enceinte" class="btn btn-outline-perso-green link">En savoir plus</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="osteopathie" class="text-light d-none d-sm-block">
        <div class="row" id="osteopathe">
            <div class="col col-12 col-sm-6 mb-4">
                <div id="flore-card" class="card text-center h-100">
                    <img src=<?=$photo_card_Flore?> alt=<?=$alt_photo_card_Flore?> class="card-img-top rounded-circle" >
                    <div class="card-body">
                        <h1 class="card-title">Ostéopathe à Pessac</h1>
                        <p class="card-text"> <strong>Flore Limouzin</strong> <?=$text_card_Flore?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/votre-osteopathe/" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 mb-4">
                <div id="still-card" class="card text-center h-100">
                    <img src=<?=$photo_card_Still?> alt=<?=$alt_photo_card_Still?> class="card-img-top rounded-circle" >
                    <div class="card-body">
                        <h2 class="card-title">Qu'est-ce que l'ostéopathie?</h2>
                        <p class="card-text"><?=$text_card_Still?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/osteopathie/" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="transition">A qui s'adresse l'ostéopathie?</h2>
        <div class="row" id="pour_qui">
            <div class="col col-12 col-sm-6 col-xl-6 mb-4">
                <div id="bebe-card" class="card text-center h-100">
                    <img src=<?=$photo_card_bebe?> alt=<?=$alt_photo_card_bebe?> class="card-img-top" >
                    <div class="card-body">
                        <h3 class="card-title">Aux nouveau-nés</h3>
                        <p class="card-text"> <?=$text_card_bebe?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#nouveau-ne" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-xl-6 mb-4">
                <div id="enceinte-card" class="card text-center h-100">
                    <img src=<?=$photo_card_enceinte?> alt=<?=$alt_photo_card_enceinte?> class="card-img-top" >
                    <div class="card-body">
                        <h3 class="card-title">Aux femmes enceintes</h3>
                        <p class="card-text"><?=$text_card_enceinte?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#femme-enceinte" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-xl-6 mb-4">
                <div id="sportif-card" class="card text-center h-100">
                    <img src=<?=$photo_card_sportif?> alt=<?=$alt_photo_card_sportif?> class="card-img-top" >
                    <div class="card-body">
                        <h3 class="card-title">Aux sportifs</h3>
                        <p class="card-text"> <?=$text_card_sportif?></p>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-6 col-xl-6 mb-4">
                <div id="senior-card" class="card text-center h-100">
                    <img src=<?=$photo_card_senior?> alt=<?=$alt_photo_card_senior?> class="card-img-top" >
                    <div class="card-body">
                        <h3 class="card-title">Aux seniors</h3>
                        <p class="card-text"><?=$text_card_senior?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-sm-none" id="osteopathie-mobile">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <div class="mb-0">
                        <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <div class="row">
                               <div class="col col-4">
                                   <img class="rounded-circle" src=<?=$photo_card_Flore?> alt=<?=$alt_photo_card_Flore?>>
                                </div>
                                <div class="col col-8">
                                    <h2 class="title-collapse l1">Flore Limouzin <span class="dropdown-toggle"></span></h2>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseOne" class="collapse" >
                    <div class="card-body">
                        <p class="card-text"> Flore Limouzin <?=$text_card_Flore?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/votre-osteopathe/" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="mb-0">
                        <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <div class="row">
                               <div class="col col-4">
                                   <img class="rounded-circle" src=<?=$photo_card_Still?> alt=<?=$alt_photo_card_Still?>>
                                </div>
                                <div class="col col-8">
                                    <h2 class="title-collapse l2">Qu'est ce que l'ostéopathie? <span class="dropdown-toggle"></span></h2>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" >
                    <div class="card-body">
                        <p class="card-text"><?=$text_card_Still?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/osteopathie/" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="transition">A qui s'adresse l'ostéopathie?</h2>
        <div class="accordion" id="accordionExample2">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <div class="mb-0">
                        <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <div class="row">
                               <div class="col col-5">
                                   <img  src=<?=$photo_card_bebe?> alt=<?=$alt_photo_card_bebe?>>
                                </div>
                                <div class="col col-7">
                                    <h2 class="title-collapse l1">Aux nouveau-nés <span class="dropdown-toggle"></span></h2>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseThree" class="collapse">
                    <div class="card-body">
                        <p class="card-text"> <?=$text_card_bebe?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#nouveau-ne" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <div class="mb-0">
                        <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <div class="row">
                               <div class="col col-5">
                                   <img src=<?=$photo_card_enceinte?> alt=<?=$alt_photo_card_enceinte?>>
                                </div>
                                <div class="col col-7">
                                    <h2 class="title-collapse l2">Aux femmes enceintes <span class="dropdown-toggle"></span></h2>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseFour" class="collapse">
                    <div class="card-body">
                        <p class="card-text"><?=$text_card_enceinte?></p>
                        <a href="http://www.flore-limouzin-osteopathe.fr/perinatalite/#femme-enceinte" class="btn btn-outline-perso-green">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <div class="mb-0">
                        <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           <div class="row">
                               <div class="col col-5">
                                   <img src=<?=$photo_card_sportif?> alt=<?=$alt_photo_card_sportif?>>
                                </div>
                                <div class="col col-7">
                                    <h2 class="title-collapse l1">Aux sportifs <span class="dropdown-toggle"></span></h2>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseFive" class="collapse">
                    <div class="card-body">
                        <p class="card-text"><?=$text_card_sportif?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <div class="mb-0">
                    <button class="btn btn-perso btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="row">
                            <div class="col col-5">
                                <img src=<?=$photo_card_senior?> alt=<?=$alt_photo_card_senior?>>
                            </div>
                            <div class="col col-7">
                                <h2 class="title-collapse l1">Aux seniors <span class="dropdown-toggle"></span></h2>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div id="collapseSix" class="collapse">
                <div class="card-body">
                    <p class="card-text"><?=$text_card_senior?></p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="cabinet">
        <h2>Le cabinet d'ostéopathie</h2>
        <div id="presentation_cabinet" style="background-image: url(<?=$photo_cabinet?>);">
               <div id="commentaire_cabinet" class="flex">
                    <div class="row flex-child">
                        <div class="col col-12 col-sm-6">
                            <h3>Horaires</h3>
                            <table id="horaire" class="table table-hover table-striped table-sm">
                                <tbody>
                                    <tr class=<?=$lu_ouvert?>>
                                        <th scope="row">Lundi</th>
                                        <td><?=$lu_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$lu_ferme?></td>
                                    </tr>
                                    <tr class=<?=$ma_ouvert?>>
                                        <th scope="row">Mardi</th>
                                        <td><?=$ma_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$ma_ferme?></td>
                                    </tr>
                                    <tr class=<?=$me_ouvert?>>
                                        <th scope="row">Mercredi</th>
                                        <td><?=$me_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$me_ferme?></td>
                                    </tr>
                                    <tr class=<?=$je_ouvert?>>
                                        <th scope="row">Jeudi</th>
                                        <td><?=$je_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$je_ferme?></td>
                                    </tr>
                                    <tr class=<?=$ve_ouvert?>>
                                        <th scope="row">Vendredi</th>
                                        <td><?=$ve_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$ve_ferme?></td>
                                    </tr>
                                    <tr class=<?=$sa_ouvert?>>
                                        <th scope="row">Samedi</th>
                                        <td><?=$sa_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$sa_ferme?></td>
                                    </tr>
                                    <tr class=<?=$di_ouvert?>>
                                        <th scope="row">Dimanche</th>
                                        <td><?=$di_ouvre?></td>
                                        <td>-</td>
                                        <td><?=$di_ferme?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?=$commentaire_horaire?>
                        </div>
                        <div class="tarif col col-12 col-sm-6 ">
                            <h3>Tarif</h3>
                            <p>

                                Enfants et adultes: <?=$tarif?> € <br>
                                Remboursements: <br>
                                De plus en plus de <a class="lien-mutuelle" href=<?=$lien_mutuelle?> target="blank">mutuelles</a> prennent en charge les consultations d'ostéopathie.<br/>
                                Règlement: <?=$reglement?>.
                                                          
                             </p>
                        </div>
                        <div class="col-col-12">
                            <div class="rdv">
                                <div class="phone">
                                    <img class="phone-img" src=<?=$phone_image?> alt="phone">
                                    <a class="phone-number" href="tel:+33556396811">05 56 39 68 11</a>
                                </div>
                                <a class="btn btn-outline-perso-green " aria-hidden="true" id="rdv" href="https://www.doctolib.fr/osteopathe/pessac/flore-limouzin" target="blank">Rendez-vous en ligne </a>
                            </div>
                        </div>
                    <i class="comment"><?=$commentaire_cabinet?></i>

                    </div>
                </div>
        </div>
    </section>
    <section id="acces">
        <h2>Acces au cabinet</h2>
        <div class="row">
            <iframe src=<?=$map_link?> width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div  class="row">
            <div class="col col-12 col-md-5" id="photo-acces">
                <img src=<?=$photo_acces_cabinet?> alt="">
            </div>
            <div id="itineraire" class="col col-12 col-md-7">
                <p>
                    Le cabinet se situe au 
                    5 avenue de Coubertin à Pessac
                </p>
                <ul>
                    <li>
                        Voiture : rocade sortie 13 « Pessac centre – Pessac Alouette »
                    </li>
                    <li>
                        Tram B : à 600m de l’arrêt « France Alouette », continuer l’avenue du haut l’Evêque, prendre la 2ème à gauche avenue du Beutre puis 2ème à droite avenue Pierre de Coubertin
                    </li>
                    <li>
                        Bus : Lianes 4 : à 700 m de l’arrêt « Boulevard du haut l’évêque » : continuer l’avenue John Fitzerald Kennedy, prendre la 1ère à droite sur le boulevard du haut Livrac puis la 2ème à gauche avenue Pierre de Coubertin.
                    </li>
                </ul>
                <hr>
                <p>
                    Le cabinet se situe au sein des résidences du parc, batiment C. <br>
                    L'entrée se fait au niveau de la sortie du garage. <br>
                    Sonner à "Cabinet paramédical".
                </p>
            </div>
        </div>
    </section>
    <?php require "common/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="common/script.js"></script>
    
</body>
</html>