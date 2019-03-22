<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">

    <title>Admin</title>
  </head>
  <body>
    <!-- Default form register -->

    <?php include('form/admin_test.php');
    ?>
<form class="text-center border border-light p-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <p class="h4 mb-4">Login</p>

    
    <!-- E-mail -->
    <input type="text" id="name" class="form-control mb-4" placeholder="Name" name="name" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"><span style="color: red"><?php echo $nameErr;?></span>
    <small id="nameHelp" class="form-text text-muted mb-4">
        Max. 20 characters
    </small>


    <!-- Password -->
    <input type="password" id="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="password"><span style="color: red"><?php echo $passwordErr;?></span>
    <small id="passwordHelp" class="form-text text-muted mb-4">
        UpperCase, LowerCase, Number/SpecialChar and min 8 Chars
    </small>

    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Log in</button>

    

</form>

<?php
  if($nameErr ==""&& $passwordErr ==""&& $password == $userPass && $name == $userName && !empty($_POST)){
    header("location:form/add_products.php");
    
  }


  ?>


<!-- Default form register -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
  </body>
</html>