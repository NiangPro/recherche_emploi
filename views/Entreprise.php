<div class="container">
    <?php getMessage(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-center">
                    Mes Demandes d'emploi
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($emplois as $em) : ?>
                                <tr>
                                    <td><?= $em->titre ?></td>
                                    <td><?= $em->description ?></td>
                                    <td><a href="?page=infoEmploi&id=<?= $em->id ?>"><i class="fa fa-eye text-success pl-3" aria-hidden="true"></i> </a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-default">
                    Nouveau demande d'emploi
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" value="<?= get_input('titre') ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Description</label>
                            <textarea name="description" class="form-control"><?= get_input('description') ?></textarea>
                        </div>
                        <button type="submit" name="addEmploi" class="btn btn-outline-success btn-sm rounded">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>