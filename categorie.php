<?php
    
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET['id'];
$categorie = getEntity("categorie",$id);

// Décaration des variables
$liste_photos = getAllPhotosbyCategorie($id);

getHeader($categorie["libelle"], "Une categorie");
?>


<header class="header_home">

    <div id="header_content" class="row col_center">

        <?php getMenu(); ?>

        <h2>Hello! Je suis jean WebDesign</h2>
        <h3>J'aime bidouiller Photoshop</h3>

    </div>

</header>

<main>

	<h1> <?php echo $categorie['libelle'];?>;</h1>
<section id="gallery_content" class="row col_center flex_wrapper">
    <?php foreach ($liste_photos as $photo) : ?>
    <?php include 'include/photo.inc.php' ; ?>
    <?php endforeach; ?>
</section>

<?php getFooter(); ?>