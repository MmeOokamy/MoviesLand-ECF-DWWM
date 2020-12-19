<?php include(__DIR__ . "./../template/header.php"); ?>
<div class="row row-cols-1 row-cols-md-4">

    <?php foreach ($this->catList as $cat): ?>
    <div class="col mb-4">
        <button name="category" value="<?= $cat['category_id'] ?>" type="button" class="btn btn-info"><?= $cat['category_name'] ?></button>
    </div>
    <?php endforeach; ?>

</div>
<?php include(__DIR__ . "./../template/footer.php"); ?>
