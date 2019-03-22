<!DOCTYPE html>
<html>

    <!-- ADMINISTRATION : NE PAS TOUCHER -->
<?php
include ("administration/administration.index.php");

?>

<head>
    <title><?php echo $titrePageIndex ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/presentation.css">
    <link rel="stylesheet" href="categoriesIndex.css">
    <link rel="stylesheet" href="styles/product_card.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/contactus.css">
    <link rel="stylesheet" href="styles/presentationIndex.css">
    <link rel="stylesheet" href="styles/categoriesIndex.css">
    <link rel="stylesheet" href="styles/aboutusIndex.css">
</head>

<body>



    <!-- NAVBAR -->
<?php
include ("navbar/navbar.inc.php");
?>


    <!-- PRESENTATION -->
<?php
include ("presentationIndex/presentationIndex.inc.php");
?>


    <!-- CATEGORIES -->
    <section>
        <div class="container">
            <div>
                <h3>Categories</h3>
            </br>
            </div>

            <div id="products" class="row view-group">
            <?php
                foreach ($indexCategories as $k => $v)
                {
                $Cat = $k;
                $imageCat = $v[0];
                $tilteCat = $v[1];
                $infoCat = $v[2];
                $linkCat = $v[3];
                include ("categoriesIndex/categoriesIndex.inc.php");
                }
            ?>
        </div>
    </section>
        </br>
        <hr>

    <!-- TOP SELLING -->

    <section>
        <?php
include ("administration/administration.xtrem.php");
include ("administration/administration.travels.php");
include ("administration/administration.bedding.php");
include ("administration/administration.dream.php");
include ("administration/administration.show.php");
include ("administration/administration.virtual.php");

?>
        <div class="container">
            <div>
                <h3>Top selling</h3>
                </br>
            </div>
                <div id="productstopselling" class="row view-group">
            <?php
            //Trouvé sur le net car chaud :
            $topselling = array_merge($productsxtrem, $productstravel, $productsdream, $productsbedding, $productsshow, $productsvirtual);

            $topselling = array_intersect_key($topselling, array_flip(array_rand($topselling, 3))); 

            $index9 = $index9 + 1;
            foreach ($topselling as $k => $v)
                {
                $titreCard = $k;
                $imagePresentation = $v[0];
                $description = $v[1];
                $price = $v[2];
                $moreInfoImage = $v[3];
                $moreInfoText = $v[4];
                $compteur = $index9++;
                include ("product_card/product_card.inc.php");
                }
            ?>
                </div>
        </div>

    </section>
        <hr>



    <!-- ABOUT US -->

    <?php
    include ("aboutusIndex/aboutusIndex.inc.php");
    ?>



    <!-- CONTACT US -->
    <?php
    include ("contactus/contactus.inc.php");
    ?>


    <!-- FOOTER -->
    <?php
    include ("footer/footer.inc.php");
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