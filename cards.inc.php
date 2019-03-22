
<head>
    <link rel="stylesheet" href="travel.css">
</head>
    <!-- présentation produit - card -->
            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail card card2">
                    <div class="img-event">
                        <img class="group list-group-image img-fluid wcs"
                            src=<?php echo $imagePresentation ?>
                            alt="">
                    </div>
                    <div class="caption card-body">
                        <h4 class="group card-title inner list-group-item-heading">
                        <?php echo $titreCard ?></h4>
                        <p class="group inner list-group-item-text">
                            <?php echo $description ?></p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                <?php echo $price ?></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <button type="button" class="btn btn1 ml-4" data-toggle="modal"
                                    data-target="#exampleModal<?=$index?>">More infos</button>
                            </div>
                            <div class="modal fade" id="exampleModal<?=$index?>" tabindex="-1" role="dialog"
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
                                                            src=<?php echo $moreInfoImage ?>
                                                            alt="rbm_single_commerce_01" width="400"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="details-product">
                                                        <h1><?=$titreCard?></h1>
                                                        <small>Published by: <a href="">Dreamer's</a></small>
                                                        <h2><?php echo $price ?></h2>
                                                        <div class="col">
                                                            <select class="form-control" name="select">
                                                                <option value="">number of people</option>
                                                                <option value="">1 person</option>
                                                                <option value="">2 people</option>
                                                                <option value="">3 people</option>
                                                                <option value="">4 people</option>
                                                            </select>
                                                        </div>
                                                        <p><?php echo $moreInfoText ?></p>
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
