<div class="container col-md-4">
    <?php getMessage(); ?>
    <div class="card">
        <div class="card-header text-center bg-default">
            <div class="row">
                <div class="col-md-6">
                    Edition Demande d'emploi
                </div>
                <div class="col-md-6"> <a href="?page=profil" class="btn btn-outline-warning rotateInUpLeft btn-sm">Retour</a></div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST">
                <input type="hidden" name="id" value="<?= $emp->id ?>">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" name="titre" value="<?= $emp->titre ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Description</label>
                    <textarea name="description" class="form-control"><?= $emp->description ?></textarea>
                </div>
                <button type="submit" name="editEmploi" class="btn btn-outline-success btn-sm rounded">Editer</button>
            </form>
        </div>
    </div>
</div>