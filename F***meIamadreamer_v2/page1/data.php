<?php




$errors = [];
/*$emails =['email0@gmail.com','email1@gmail.com','email2@gmail.com']; /*A modifier en fonction du sujet séléctionné sur index.php*/


/* !array_key_exists : si la clé n'existe pas (car !) OU si la clé est vide */

if(!array_key_exists('title', $_POST) || $_POST['title'] == ''){
    $errors['title'] = "You didn't fill the title";
}


if(!array_key_exists('image', $_POST) || $_POST['image'] == ''){
    $errors['image'] = "You didn't download any image";

}

if(!array_key_exists('description', $_POST) || $_POST['description'] == ''){
    $errors['description'] = "You didn't fill a description";
}

if(!array_key_exists('price', $_POST) || $_POST['price'] == ''){
    $errors['price'] = "You didn't save a price";
}

if(!array_key_exists('moreinfoimage', $_POST) || $_POST['moreinfoimage'] == ''){
    $errors['moreinfoimage'] = "You didn't download an image (for 'more info')";

}

if(!array_key_exists('moreinfotext', $_POST) || $_POST['moreinfotext'] == ''){
    $errors['moreinfotext'] = "You didn't a text (for 'more info')";

}




session_start(); /* stockage des arguments */

if(!empty($errors)){     /* si erreur dans la table, alors ... */


    $_SESSION['errors'] = $errors; /* renvoi du tableau d'erreurs vers index.php (pour utilisateur) */

    $_SESSION['inputs'] = $_POST; /* sauvegarde des inputs saisies si erreurs détectées */

    header('Location: formulaire.php'); /* ... renvoi vers page formulaire.php */
}
else { /* si auccune erreur dans la table */
    $_SESSION['success'] = 1;

    /* Envoi email
    $message = $_POST['message'];
    $headers = 'FROM : ' . $_POST['email'];
    mail($email[$_POST['service']], $listederoulante, $message, $headers);
    header('Location: index.php');*/
}
?>