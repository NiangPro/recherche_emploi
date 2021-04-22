<?php

    if(isset($_POST['addEmploi'])){
        $errors = [];
        extract($_POST);

        if(notEmpty([$titre, $description])){
            $em = new Emploi($titre, $description, $_SESSION['user']->id);
            
            $db->addEmploi($em);
            saveMessage(['Ajout emploi avec succès'], 'success');
            return header('Location: ?page=profil');
        }else{
            $errors[] = "Veuillez saisir tous les champs";
            save_input_data();
            saveMessage($errors);
        }

    }

    if(isset($_GET['idEmp'])){
        $db->deleteEmploi($_GET['idEmp']);
        saveMessage(['Vous avez supprimé une demande d\'emploi'], 'success');
        return header('Location: ?page=profil');
    }

    if (isset($_GET['idCv'])) {
        $db->deleteCv($_GET['idCv']);
        saveMessage(['Vous avez supprimé votre cv'], 'success');
        return header('Location: ?page=profil');
    }


    $selfEmplois = $db->getEmploisByUserId($_SESSION['user']->id);
    $emplois = $db->getEmplois();
    $cv= $db->getCvByUserId($_SESSION['user']->id);

require_once('views/'.$_SESSION['user']->role.'.php');