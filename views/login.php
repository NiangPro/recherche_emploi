<div class="container col-md-4">
    <?php getMessage(); ?>
    <div class="card">
        <div class="card-header text-center bg-default">
            Connexion
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?= get_input('email') ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" name="login" class="btn btn-outline-success btn-sm rounded">Connecter</button>
            </form>
        </div>
    </div>
</div>