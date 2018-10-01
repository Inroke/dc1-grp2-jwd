<?php require_once '../../../model/database.php';
$liste_categories = getAllEntities("categorie");
require_once '../../layout/header.php'?>


<h1>Gestion des catégories</h1>

<a href="create.php" class="btn btn-primary">
    <i class='fa fa-plus'></i>
    Ajouter
</a>

<table class="table table-striped taple-bordered">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_categories as $categorie) : ?>
        <tr>
            <td> <?php echo $categorie['libelle']; ?></td>
            <td></td>
        </tr>
<?php endforeach;?>
    </tbody>
</table>
<?php require_once '../../layout/footer.php'?>
