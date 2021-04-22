<?php

if (isset($_POST['register'])) {
    extract($_POST);
    $errors = [];
    // les fonctions isName, saveMessage et notEmpty se trouvent au niveau de
    //     layouts/_functions.php
    if(notEmpty([$prenom, $nom, $role, $email, $password, $password_confirm])){
        if (isName($prenom)) {
            if (isName($nom)){
                if ($password === $password_confirm) {
                    $user = new User($prenom, $nom, $role, $email, $password);
                    // $db se trouve au niveau de (index.php) il contient la connexion
                    $db->addUser($user);
                    clear_input_data();
                    saveMessage(['Inscription avec succès'], 'success');

                    return header('Location: ?page=login');
                }else{
                    $errors[] = 'Les deux mots de passe sont différents!';
                }
            }else{
                $errors[] = 'Nom invalid!';
            }
        }else{
            $errors[] = 'Prénom invalid!';
        }
    }else{
        $errors[] = 'Veuillez remplir tous les champs!';
    }

    saveMessage($errors);
    save_input_data();
}

require_once('views/register.php');