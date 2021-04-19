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
    <section id="flore-limouzin">
        <div class="container-fluid" id="etudes" style="background-image: url(<?=$photo_etudes?>);">
            <div class="row">
                <div class="col col-12  col-md-8 col-lg-6" id="comment-etudes">
                    <h2>Flore Limouzin</h2>
                    <p class="sous-titre">Diplômée de l'Institut Supérieur d'ostéopathie de Lyon en 2011</p>
                    <p>
                        <?php echo nl2br($cursus);?>
                    </p>
                </div>
                <div class="col col-0  col-md-4 col-lg-6"></div>
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