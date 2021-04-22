<?php


if (isset($_POST['addCv'])) {
    $errors = [];
    extract($_POST);

    if (notEmpty([$prenom, $nom, $tel, $email, $adresse, $level, $experience, $age])) {
        $cv = new CV($prenom, $nom, $age, $adresse, $email, $tel, $level, $experience, $_SESSION['user']->id);

        $db->addCV($cv);
        saveMessage(['Ajout cv avec succès'], 'success');
        clear_input_data();
        return header('Location: ?page=profil');
    } else {
        $errors[] = "Veuillez saisir tous les champs";
        save_input_data();
        saveMessage($errors);
    }
}

require_once('views/addCv.php');