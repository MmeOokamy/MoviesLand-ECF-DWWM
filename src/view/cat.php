<?php include(__DIR__ . "./../template/header.php"); ?>
<div class="row row-cols-1 row-cols-md-4">

    <?php foreach ($this->catList as $cat): ?>
        <button type="button" class="btn btn-info"><?= $cat['category_name'] ?></button>
    <?php endforeach; ?>

</div>
<?php include(__DIR__ . "./../template/footer.php"); ?>
