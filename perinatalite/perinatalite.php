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
    <section id="perinatalite">
        <div id="femme-enceinte">
            <div class="card mb-3"  >
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 col-lg-3 ">
                        <img src="<?=$photo_enceinte?>" class="card-img " alt=<?=$alt_enceinte?>>
                    </div>
                    <div class="col-md-8 col-lg-9 ">
                        <div class="card-body ">
                            <h5 class="card-title">La femme enceinte</h5> 
                            <p class="card-text">
                                <?php echo nl2br($femme_enceinte)?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3"  >
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 col-lg-3 ">
                        <img src="<?=$photo_consultation_enceinte?>" class="card-img " alt=<?=$alt_consultation_enceinte?>>
                    </div>
                    <div class="col-md-8 col-lg-9 ">
                        <div class="card-body ">
                        <h5 class="card-title">Je suis enceinte, quand consulter?</h5> 
                            <p class="card-text">
                                <?php echo nl2br($consultation_enceinte)?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="nouveau-ne">
            <div class="card mb-3"  >
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 col-lg-3 ">
                        <img src="<?=$photo_bebe?>" class="card-img " alt=<?=$alt_bebe?>>
                    </div>
                    <div class="col-md-8 col-lg-9 ">
                        <div class="card-body ">
                            <h5 class="card-title">Le nouveau-né</h5> 
                            <p class="card-text">
                                <?php echo nl2br($nouveau_ne)?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3"  >
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 col-lg-3 ">
                        <img src="<?=$photo_consultation_bebe?>" class="card-img " alt=<?=$alt_consultation_bebe?>>
                    </div>
                    <div class="col-md-8 col-lg-9 ">
                        <div class="card-body ">
                        <h5 class="card-title">Quand consulter?</h5> 
                            <p class="card-text">
                                <?php echo nl2br($consultation_bebe)?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <?php require"../common/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../common/script.js"></script>
    
</body>
</html>