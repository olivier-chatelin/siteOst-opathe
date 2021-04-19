<!DOCTYPE html>
<html lang="en">
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
    <section id="l-osteopathie" class="container">
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_still_2?>" class="card-img " alt=<?=$alt_Still?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body ">

                    <p class="card-text">
                        <blockquote id="q1"  >
                            <?=$citation_1?>
                        </blockquote>
                        <blockquote id="q2" class="d-none" >
                            <?=$citation_2?>
                        </blockquote>
                        <blockquote id="q3" class="d-none">
                            <?=$citation_3?>
                        </blockquote>
                        <blockquote id="q4" class="d-none">
                            <?=$citation_4?>
                        </blockquote>
                        <blockquote id="q5" class="d-none">       
                            <?=$citation_5?>
                        </blockquote>
                        <cite>Andrew Taylor Still (1828-1917) Fondateur de l'ostéopathie</cite>
                        <h5 class="below-cite">Qu'est-ce que l'ostéopathie ?</h5>
                        <p><?php echo nl2br($osteopathie_explication)?></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_corps?>" class="card-img " alt=<?=$alt_corps?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body ">
                    <h5 class="card-title">Comment et pourquoi les douleurs se manifestent ?</h5> 
                    <p class="card-text">
                        <?php echo nl2br($comment_pourquoi)?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_skull?>" class="card-img " alt=<?=$alt_skull?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body ">
                    <h5 class="card-title">Quel est le rôle de l'ostéopathie ?</h5> 
                    <p class="card-text">
                        <?php echo nl2br($role)?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h2>Les différentes étapes d'une consultation d’ostéopathie</h2>
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_interrogatoire?>" class="card-img " alt=<?=$alt_interrogatoire?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body " >
                    <h5 class="card-title">L'anamnèse ou interrogatoire</h5> 
                    <p class="card-text">
                        <?php echo nl2br($anamnese)?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_manip?>" class="card-img " alt=<?=$alt_manip?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body ">
                    <h5 class="card-title">La pratique</h5> 
                    <p class="card-text">
                        <?php echo nl2br($pratique)?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" >
        <div class="row no-gutters align-items-center">
            <div class="col-md-4 col-lg-3 ">
                <img src="<?=$photo_temps?>" class="card-img " alt=<?=$alt_temps?>>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="card-body ">
                    <h5 class="card-title">La suite de la séance</h5> 
                    <p class="card-text">
                        <?php echo nl2br($suite)?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    
</section>
<?php require"../common/footer.php";?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../common/script.js"></script>
<script src="../common/script-fade.js"></script>

</body>
</html>