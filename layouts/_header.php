<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'emploi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    /
</head>

<body>
    <nav class="navbar navbar-expand-lg default-color navbar-light fixed-top">
        <a class="navbar-brand ml-5" href="#"><span class="text-danger">R</span>Emploi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav ml-auto">
                <?php if (!is_logged()) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=register">Inscription</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=logout">Déconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5 pt-3">