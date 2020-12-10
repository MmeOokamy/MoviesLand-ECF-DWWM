<?php include(__DIR__ . "./../template/header.php"); ?>
<div class="columns">
    <?php foreach ($this->moviesList as $movie): ?>


        <div class="column card">

            <div class="card-image"><img src="<?= $movie['movies_url'] ?>" alt="<?= $movie['movies_name'] ?>"></div>
            <div class="card_content"><h3><?= $movie['movies_name'] ?></h3></div>


        </div>


    <?php endforeach; ?>
</div>

<?php include(__DIR__ . "./../template/footer.php"); ?>
