<!DOCTYPE html>
<html>

<head>
    <title>F*** me, I'm a dreamer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="travel.css">
</head>

<header>
    <?php
include "navbar.inc.php"
?>
</header>

<body>
    <!-- Présentation catégorie-->
    <section id="presentationcat">
        <div class="container">
            <div class="card">
                <img src="https://cdn.pixabay.com/photo/2018/01/31/12/16/architecture-3121009_960_720.jpg"
                    class="card-img wcs2" alt="...">
                <div class="card-img-overlay">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <h3 class="card-title1">Travels</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Présentation catégorie-->
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
            <div id="products" class="row view-group">
                <?php
                include "product_card.inc.php";
                ?>
            </div>
        </div>
    </section>
    <!-- présentation produit - card-->

    <hr>

    <!-- Objets les plus consultés par les clients-->
    <section>
        <div id="mostview" class="container">
                <div>
                    <h3 class="title">Most views items</h3>
                </div>
            <div class="row view-group">
                <?php
                    include "mostViewCards.php";
                    $products = array_rand($index,4);
                    echo $products[$random_keys[4]]."<br>";
                    echo $products[$random_keys[2]]."<br>";
                    echo $products[$random_keys[5]];
                
                    include "mostViewCards.php";
                    $random_keys = array_rand($index,6);
                    echo $a[$random_keys[1]]."<br>";
                    echo $a[$random_keys[3]]."<br>";
                    echo $a[$random_keys[6]];
                
                    include "mostViewCards.php";
                    $random_keys = array_rand($index,3);
                    echo $a[$random_keys[1]]."<br>";
                    echo $a[$random_keys[2]]."<br>";
                    echo $a[$random_keys[3]];
                ?>
            </div>
        </div>
    </section>
    <!-- Objets les plus consultés par les clients-->

    <hr>

    <!-- Meilleurs ventes toutes catégories confondues-->
    <section>
        <div id="topselling" class="container">
            <div>
                <h3 class="title2">Top Selling</h3>
            </div>
            <!--Cards 1-->
            <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card card2">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid"
                                src="https://www.climatsdumonde.biz/images/photo/B_660_ScallopBar1_[400].jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Trip to Thailand</h4>
                            <p class="group inner list-group-item-text">
                                Friendly and fun-loving, cultured and historic, Thailand radiates a golden hue, from its
                                glittering temples and tropical beaches through to the ever-comforting Thai smile.
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $950.90</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <button type="button" class="btn btn1 ml-4" data-toggle="modal"
                                        data-target="#exampleModal4">More
                                        infos</button>
                                </div>
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="product_img"><img
                                                                src="https://voyage-vietnam.asia/images/tour/items/img1/fascinating-thailand-vietnam-itinerary10d-400.jpg"
                                                                alt="rbm_single_commerce_01" width="400"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="details-product">
                                                            <h1>Trip to Thailande</h1>
                                                            <small>Published by: <a href="">Dreamer's</a></small>
                                                            <h2>$950.90</h2>
                                                            <div class="col">
                                                                <select class="form-control" name="select">
                                                                    <option value="">number of people</option>
                                                                    <option value="">1 person</option>
                                                                    <option value="">2 people</option>
                                                                    <option value="">3 people</option>
                                                                    <option value="">4 people</option>
                                                                </select>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Nam
                                                                nibh. Nunc varius facilisis eros. Sed erat. In in velit
                                                                quis
                                                                arcu ornare laoreet. Curabitur adipiscing luctus massa.
                                                            </p>
                                                            <div id="share"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart"></i> Add To
                                                    Cart</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Cards 2-->
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card card2">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid"
                                src="https://viaimage3.viafrance.com//img/img-1000x500/2/9/5/295663_1000x500.jpg?width=400&height=250&mode=crop"
                                alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Trip to Florence</h4>
                            <p class="group inner list-group-item-text">
                                Cradle of the Renaissance, romantic, enchanting and utterly irresistible, Florence
                                (Firenze) is a place to feast on world-class art and gourmet Tuscan cuisine.Few cities
                                are so compact size or so packed with extraordinary art.
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $895.90</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <button type="button" class="btn btn1 ml-4" data-toggle="modal"
                                        data-target="#exampleModal1">More
                                        infos</button>
                                </div>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="product_img"><img
                                                                src="https://besthqwallpapers.com/Uploads/18-4-2018/48880/thumb-santo-spirito-florence-evening-sunset-italy.jpg"
                                                                alt="rbm_single_commerce_01" width="400"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="details-product">
                                                            <h1>Trip to <br>Florence</h1>
                                                            <small>Published by: <a href="">Dreamer's</a></small>
                                                            <h2>$895.90</h2>
                                                            <div class="col">
                                                                <select class="form-control" name="select">
                                                                    <option value="">number of people</option>
                                                                    <option value="">1 person</option>
                                                                    <option value="">2 people</option>
                                                                    <option value="">3 people</option>
                                                                    <option value="">4 people</option>
                                                                </select>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Nam
                                                                nibh. Nunc varius facilisis eros. Sed erat. In in velit
                                                                quis
                                                                arcu ornare laoreet. Curabitur adipiscing luctus massa.
                                                            </p>
                                                            <div id="share"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart"></i> Add To
                                                    Cart</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Cards 3-->
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card card2">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid"
                                src="http://www.croisieresurmekong.com/halongbay-images/news/img1/S4TN9C1TDD_pro.jpg"
                                alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Trip to Wild Code School</h4>
                            <p class="group inner list-group-item-text">
                                Become a web developer by completing our 5-month training programme in web development.
                                Before you start at one of our schools, we invite you to learn the basics of coding,
                                free of charge, on our online platform.
                            </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $6000.00</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <button type="button" class="btn btn1 ml-4" data-toggle="modal"
                                        data-target="#exampleModal3">More
                                        infos</button>
                                </div>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="product_img"><img
                                                                src="http://voyagebirmanie-myanmar.com/wp-content/uploads/2014/10/Birmanie-Yangon-400x250.jpg"
                                                                alt="rbm_single_commerce_01" width="400"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="details-product">
                                                            <h1>Trip to <br>Birmanie</h1>
                                                            <small>Published by: <a href="">Dreamer's</a></small>
                                                            <h2>$6000.00</h2>
                                                            <div class="col">
                                                                <select class="form-control" name="select">
                                                                    <option value="">number of people</option>
                                                                    <option value="">1 person</option>
                                                                    <option value="">2 people</option>
                                                                    <option value="">3 people</option>
                                                                    <option value="">4 people</option>
                                                                </select>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                                Nam
                                                                nibh. Nunc varius facilisis eros. Sed erat. In in velit
                                                                quis
                                                                arcu ornare laoreet. Curabitur adipiscing luctus massa.
                                                            </p>
                                                            <div id="share"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart"></i> Add To
                                                    Cart</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meilleurs ventes toutes catégories confondues-->

    <hr>

    <!--ContactUs-->
    <Section id="contactus">
        <div class="container">
            <h2 class="ContactUs"> Contact Us</h2>

            <br />
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <!--<label for="exampleFormControlInput1">Email address</label>-->
                            <input type="email" class="form-control" placeholder="@">
                        </div>
                        <div class="form-group">
                            <!--<label for="exampleFormControlInput1">Email address</label>-->

                            <input type="email" class="form-control" id="Home" placeholder="🏰">
                        </div>

                        <div class="form-group">

                            <textarea class="form-control" id="message" placeholder="(Your Message here)"
                                rows="10"></textarea>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-outline-dark boutonsubmit">submit</button>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="col-lg-6">
                    <img class="imgcontactus"
                        src="https://image.noelshack.com/fichiers/2019/10/4/1551952493-fullsizeoutput-f04.jpeg ">
                </div>
            </div>
        </div>
    </Section>
    <!-- Contact us-->

    <!-- Footer-->
<?php
include "footer.inc.php"
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