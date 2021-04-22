<div class="container col-md-5">
    <!-- elle permet d'afficher les msg d'erreur -->
    <?php getMessage(); ?>
    <div class="card">
        <div class="card-header text-center bg-default">
            <div class="row">
                <div class="col-md-6 text-white">
                    Edition Cv
                </div>
                <div class="col-md-6"> <a href="?page=profil" class="btn btn-outline-warning rotateInUpLeft btn-sm">Retour</a></div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>" class="form-control" required>

                    <div class="form-group col">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" value="<?= $cv->prenom ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="nom">Nom</label>
                        <input type="text" value="<?= $cv->nom ?>" name="nom" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" value="<?= $cv->adresse ?>" class="form-control" required>
                    </div>

                    <div class="form-group col">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= $cv->email ?>" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="tel">Telephone</label>
                        <input type="text" name="tel" value="<?= $cv->tel ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="age">Age</label>
                        <input type="number" name="age" class="form-control" value="<?= $cv->age ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col">
                        <label for="level">Niveau d'etude</label>
                        <input type="text" name="level" value="<?= $cv->level ?>" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="age">Experience professionnelle</label>
                        <textarea name="experience" required class="form-control"><?= $cv->experience ?></textarea>
                    </div>
                </div>

                <button type="submit" name="editCv" class="btn btn-outline-success btn-sm rounded">Modifier</button>
            </form>
        </div>
    </div>
</div>