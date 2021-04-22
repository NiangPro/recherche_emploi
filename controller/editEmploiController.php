<?php

if (isset($_POST['editEmploi'])) {
    $errors = [];
    extract($_POST);

    if (notEmpty([$id, $titre, $description])) {

        $db->editEmploi($id, $titre, $description);
        saveMessage(['Edition demande d\'emploi avec succès'], 'success');
        return header('Location: ?page=profil');
    } else {
        $errors[] = "Veuillez saisir tous les champs";
        save_input_data();
        saveMessage($errors);
    }
}

require_once('views/editEmploi.php');