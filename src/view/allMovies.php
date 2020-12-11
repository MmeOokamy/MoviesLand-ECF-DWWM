<?php include(__DIR__ . "./../template/header.php"); ?>

<?= $alerte;?>
<div class="row row-cols-1 row-cols-md-4">

    <?php foreach ($this->moviesList as $movie): ?>
    <div class="col mb-4">
        <div class="card">
            <img src="<?= $movie['movies_url'] ?>" class="card-img-top" alt="<?= $movie['movies_name'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $movie['movies_name'] ?></h5>

            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>
<?php include(__DIR__ . "./../template/footer.php"); ?>
