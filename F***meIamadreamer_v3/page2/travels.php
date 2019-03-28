<!DOCTYPE html>
<html>

<!-- ADMINISTRATION : NE PAS TOUCHER -->
<?php
include ("../administration/administration.index.php");
include ("../administration/administration.travels.php");
?>

<head>
    <title><?php echo $titrePage2 ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/presentation.css">
    <link rel="stylesheet" href="../styles/product_card.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/contactus.css">

</head>

<body>



    <!-- NAVBAR -->
<?php
include ("../navbar/navbar.inc.php");
?>



    <!-- PRESENTATION -->

<?php
include ("../presentation/presentation.inc.php");
?>
    


    <!-- PRODUCT_CARD -->

    <!-- Option Affichage Liste / Grille -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            <button class="btn btn-info" id="list">List View</button>
                            <button class="btn btn-danger" id="grid">Grid View</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Cards -->
            <!-- Modifier tableau uniquement !!!!  -->
            <div id="products" class="row view-group">
            
            <?php
            $index = 0;
            foreach ($productstravel as $k => $v)
                {
                $titreCard = $k;
                $imagePresentation = $v[0];
                $description = $v[1];
                $price = $v[2];
                $moreInfoImage = $v[3];
                $moreInfoText = $v[4];
                $compteur = $index++;
                include ("../product_card/product_card.inc.php");
                }
            ?>
        </div>
        </div>

    </section>
        <hr>

    <!-- MOST VIEWED ITEMS -->

    <section>
        <div class="container">
            <div>
                <h3>Most views items</h3>
            </br>
            </div>
            <div id="products" class="row view-group">
            <?php
            //Trouvé sur le net car chaud :
            $products1travel = array_intersect_key($productstravel, array_flip(array_rand($productstravel, 3))); 

            $index = $index + 1;
            foreach ($products1travel as $k => $v)
                {
                $titreCard = $k;
                $imagePresentation = $v[0];
                $description = $v[1];
                $price = $v[2];
                $moreInfoImage = $v[3];
                $moreInfoText = $v[4];
                $compteur = $index++;
                include ("../product_card/product_card.inc.php");
                }
            ?>
            </div>
        </div>
    </section>
        <hr>


    <!-- TOP SELLING -->

    <section>
        <div class="container">
            <div>
                <h3>Top selling</h3>
            </br>
            </div>
            <div id="products" class="row view-group">
            <?php
            //Trouvé sur le net car chaud :
            $products2travel = array_intersect_key($productstravel, array_flip(array_rand($productstravel, 3))); 

            $index = $index + 1;
            foreach ($products2travel as $k => $v)
                {
                $titreCard = $k;
                $imagePresentation = $v[0];
                $description = $v[1];
                $price = $v[2];
                $moreInfoImage = $v[3];
                $moreInfoText = $v[4];
                $compteur = $index++;
                include ("../product_card/product_card.inc.php");
                }
            ?>
            </div>
        </div>
    </section>
        <hr>

    <!-- CONTACT US -->
    <?php
    include ("../contactus/contactus.inc.php");
    ?>


    <!-- FOOTER -->
    <?php
    include ("../footer/footer.inc.php");
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script type="text/javascript">$(document).ready(function () {
        $('#list').click(function (event) { event.preventDefault(); $('#products .item').addClass('list-group-item'); });
        $('#grid').click(function (event) { event.preventDefault(); $('#products .item').removeClass('list-group-item'); $('#products .item').addClass('grid-group-item'); });
    });</script>
</body>

</html>