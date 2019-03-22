<?php
session_start(); /* Démarrage session issue de contact.php (info erreurs) */
?>

    <!doctype html>
    <html lang="en">



    <!-- HEAD -->

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Style.css">

        <title>Mon site / Formulaire</title>
    </head>



    <!-- BODY -->

    <body>


    <!-- Formulaire -->


    <div class="container">

        <div class="starter-template">

            <?php /* Si erreur dans la table SESSION, alors affichage des erreurs */
            if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); /* implode = affiche chaine de caractère depuis tableau */ ?>
                </div>
            <?php endif; /* disparition des erreurs après actualisation*/?>

            <?php
            if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">Your item has been saved with success</div>
            <?php endif;?>

            <!-- Renvoi des données vers la page contact.php"
                    GET : arguments envoyés par url
                    POST : arguments non envoyés -->
            <form action="data.php" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputcategorie">Categorie : </label>
                            <select class="categorie" name="inputcategorie">
                                <option value="0">Xtrem</option>
                                <option value="1">Travels </option>
                                <option value="2">Dream</option>
                                <option value="3">Bedding</option>
                                <option value="4">Show</option>
                                <option value="5">Virtual Reality</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputtitle">Title</label>
                            <input type="text" name="title" class="form-control" id="inputtitle"  value="<?= isset($_SESSION['inputs']['title']) ? $_SESSION['inputs']['title']:''; ?>" >
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputimage">Image (400 x 250 recommanded)</label>
                            <input type="file" name="image" class="form-control" id="inputimage"  value="<?= isset($_SESSION['inputs']['image']) ? $_SESSION['inputs']['image']:''; ?>" >
                            <button type="submit" class="btn">Upload image</button>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputdescription">Description</label>
                            <textarea type="text" name="description" class="form-control" id="inputdescription" rows="5"  value="<?= isset($_SESSION['inputs']['description']) ? $_SESSION['inputs']['description']:''; ?>" ></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputprice">Price</label>
                            <input type="text" name="price" class="form-control" id="inputprice"  value="<?= isset($_SESSION['inputs']['price']) ? $_SESSION['inputs']['price']:''; ?>" >
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputmoreinfoimage">More Info Image (400 x 250 recommanded)</label>
                            <input type="file" name="moreinfoimage" class="form-control" id="inputmoreinfoimage"  value="<?= isset($_SESSION['inputs']['moreinfoimage']) ? $_SESSION['inputs']['moreinfoimage']:''; ?>" >
                            <button type="submit" class="btn">Upload image</button>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="inputmoreinfotext">More Info Text</label>
                            <textarea type="text" name="moreinfotext" class="form-control" id="inputmoreinfotext" rows="5"  value="<?= isset($_SESSION['inputs']['moreinfotext']) ? $_SESSION['inputs']['moreinfotext']:''; ?>" ></textarea>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="button">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>

                </div>
            </form>


        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>