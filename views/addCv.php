<div class="container col-md-5">
    <!-- elle permet d'afficher les msg d'erreur -->
    <?php getMessage(); ?>
    <div class="card">
        <div class="card-header text-center bg-default">
            <div class="row">
                <div class="col-md-6 text-white">
                    Ajout Cv
                </div>
                <div class="col-md-6"> <a href="?page=profil" class="btn btn-outline-warning rotateInUpLeft btn-sm">Retour</a></div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="form-group col">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" value="<?= get_input('prenom') ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="nom">Nom</label>
                        <input type="text" value="<?= get_input('nom') ?>" name="nom" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" value="<?= get_input('adresse') ?>" class="form-control" required>
                    </div>

                    <div class="form-group col">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= get_input('email') ?>" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="tel">Telephone</label>
                        <input type="text" name="tel" value="<?= get_input('tel') ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control" value="<?= get_input('age') ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="level">Niveau d'etude</label>
                        <input type="text" name="level" value="<?= get_input('level') ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="age">Experience professionnelle</label>
                        <textarea name="experience" required class="form-control"><?= get_input('experience') ?></textarea>
                    </div>
                </div>

                <button type="submit" name="addCv" class="btn btn-outline-success btn-sm rounded">Ajouter</button>
            </form>
        </div>
    </div>
</div>