<div class="container">
    <?php getMessage(); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-default">
                    <div class="row">
                        <div class="col-md-6">
                            Mon CV
                        </div>
                        <div class="col-md-6">
                            <?php if ($cv) : ?>
                                <a href="?page=editCv&id=<?= $cv->id ?>"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a> <a href="?page=profil&idCv=<?= $cv->id ?>" onclick="return confirm('Êtes-vous sûr ?')"><i class="fa fa-trash text-danger" aria-hidden="true"></i> </a>
                            <?php else : ?>
                                <a href="?page=addCv" class="btn btn-success rotateInUpLeft btn-sm">Ajouter</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <?php if ($cv) : ?>
                    <table>
                        <tr>
                            <th>
                                <h6><u>Prénom:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->prenom ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Nom:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->nom ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Age:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->age ?>ans</h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Téléphone:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->tel ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Email:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->email ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Adresse:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->adresse ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Niveau d'etude:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->level ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h6><u>Expérience professionnelle:</u></h6>
                            </th>
                            <td>
                                <h5> <?= $cv->experience ?></h5>
                            </td>
                        </tr>
                    </table>
                <?php else : ?>
                    Aucun cv pour le moment
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Liste des demandes d'empoi
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
    </div>
</div>