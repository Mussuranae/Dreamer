<!DOCTYPE html>
<html>

<head>
    <title>F*** me, I'm a dreamer - Virtual Reality</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/virtual.css">
    <link rel="stylesheet" type="text/css" href="style/nav.css">
</head>

<body>
    <header>
        
    </header>

    <!-- Navbar -->
<?php
include "nav_virtual.php"
?>


    <!-- Présentation catégorie-->
    <section id="presentationcat">
        <div class="container">
            <div class="card mb-3">
                <img src="img_virtual/VR1.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <h3 class="card-title title1">Virtual</h3> <!-- titre responsive -->


                            <h3 class="card-title title2">Reality</h3> <!-- titre responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">Escape a reality that can be hard through Virtual Reality. Whatever the time you
                    have ahead, with us, you'll be able to evade. Once you're in, you're in for life.
                </p>
            </div>
        </div>
    </section>
    <!-- Présentation catégorie-->

    <!-- Cards -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            <button class="btn btn-info" id="list">
                                List View
                            </button>
                            <button class="btn btn-danger" id="grid">
                                Grid View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Cards 1-->
            <div id="products" class="row view-group">
                <?php

                include("card_virtual.php");

                ?>

             </div></div></section>   
    <!-- présentation produit - card-->

<hr><hr><hr>
    <!-- Objets les plus consultés par les clients-->
    <section>
        <div class="container">
            <div>
                <h3>Most views items</h3>
            </div>
            <!--Cards 1-->
            <div class="row view-group">
               <?php

                include("card_virtual2.php");

                ?> 
            </div>
        </div>
    </section>
    <!-- Objets les plus consultés par les clients-->
    <hr>
    <!-- Meilleurs ventes toutes catégories confondues-->
    <section id="topselling">
        <div class="container">
            <div>
                <h3>Top Selling</h3>
            </div>
            <!--Cards 1-->
            <div class="row view-group">
                <?php

                include("card_virtual2.php");

                ?> 
            </div>
        </div>
    </section>
    <!-- Meilleurs ventes toutes catégories confondues-->

    <hr>
    <!--ContactUs-->
    <?php
    include "contact_virtual.php";
    ?>
    <!-- Contact us-->

    <!-- Footer-->
    <?php
        include "foot_virtual.php";
    ?>
    <!--Footer-->

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