<div class="container col-md-5">
    <!-- elle permet d'afficher les msg d'erreur -->
    <?php getMessage(); ?>
    <div class="card">
        <div class="card-header text-center bg-default">
            Inscription
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

                <div class="form-group">
                    <label for="role">Rôle</label>
                    <select name="role" class="form-control" required>
                        <option value="Demandeur">Demandeur</option>
                        <option value="Entreprise">Entreprise</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?= get_input('email') ?>" class="form-control" required>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group col">
                        <label for="password">Confirmation</label>
                        <input type="password" name="password_confirm" class="form-control" required>
                    </div>
                </div>

                <button type="submit" name="register" class="btn btn-outline-success btn-sm rounded">S'inscrire</button>
            </form>
        </div>
    </div>
</div>