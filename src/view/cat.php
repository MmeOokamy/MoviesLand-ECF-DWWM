<?php include(__DIR__ . "./../template/header.php"); ?>
<div class="row row-cols-1 row-cols-md-4">

    <?php foreach ($this->catList as $cat): ?>
        <?= $cat['category_name'] ?>
    <?php endforeach; ?>

</div>
<?php include(__DIR__ . "./../template/footer.php"); ?>
