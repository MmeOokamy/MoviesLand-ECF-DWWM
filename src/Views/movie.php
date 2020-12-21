<?php include(__DIR__ . "./../Templates/header.php"); ?>


<div class="row row-cols-1 row-cols-md-4">
<div></div>
    <div class="box ooka-margin">
        <img src="<?= $this->movie['movies_url'] ?>" class="card-img-top" alt="<?= $this->movie['movies_name'] ?>">
    </div>

    <div class="box ooka-margin">
        <h3 class="title is-3"><?= $this->movie['movies_name'] ?></h3>
        <hr>
        <h4 class="subtitle is-4">Année de sortie: <?= $this->movie['movies_date'] ?></h4>
        <h4 class="subtitle is-4">Categorie: <?= $this->movie['category_name'] ?></h4>
    </div>
</div>
<div></div>


<?php include(__DIR__ . "./../Templates/footer.php"); ?>
