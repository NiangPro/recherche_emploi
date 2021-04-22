<?php

    if(isset($_POST['login'])){
        extract($_POST);
        $errors = [];
        if(notEmpty([$email, $password])){
            $user = $db->login($email, $password);

            if($user){
                $_SESSION['user'] = $user;
                return header('Location: ?page=profil');
            }else{
                $errors[] = 'Email ou mot de passe incorrect';
            }
        }else{
            $errors[] = 'Veuillez remplir tous les champs';
        }

        saveMessage($errors);
        save_input_data();
    }

require_once('views/login.php');