<!-- index.php -->
<div class="container">

    <?php include_once('header.php'); ?>
    <h1>Site de recettes</h1>

    <!-- inclusion des variables et fonctions -->
    <?php
    include_once('variables.php');
    include_once('functions.php');
    ?>

    <!-- inclusion de l'entête du site -->
    <?php include_once('header.php'); ?>

    <?php foreach(getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach ?>
</div>

<!-- inclusion du bas de page du site -->
<?php include_once('footer.php'); ?>
