<?php include(__DIR__ . "./../template/header.php");

?>

<h2>Remplis moi de film !</h2>

<?php if (isset($alerte)) {
    echo $alerte;
}
?>

<form action="?page=addmovie" method="post">

    <div class="form-group mt-5">
        <label for="name">Title du film</label>
        <input class="input is-primary" name="name" id="name" type="text" placeholder="Titre Français ou Original"
               required>
    </div>

    <div class="form-group">
        <label for="url">Lien vers l'image du film</label>
        <input class="input is-info" name="url" id="url" type="text" placeholder="L'affiche du film de préférence"
               required>
    </div>

    <div class="form-group">
        <label for="date">Date du film</label>
        <input class="input is-info" name="date" id="date" type="number" placeholder="" required>
    </div>

    <div class="form-check form-check-inline">



            <?php foreach ($this->catList as $cat): ?>
              <!--  https://codepen.io/lefourbefromage/pen/KKKVjKV -->
                        <input class="" type="radio" name="category" value="<?= $cat['category_id'] ?>" id="category" required >
                        <label for="category"><?= $cat['category_name'] ?></label>

            <?php endforeach; ?>

    </div>


    <div class="mt-5 ">
        <input type="hidden">
        <button type="submit" class="button is-primary is-normal is-outlined">Ajouter</button>
    </div>

</form>


<?php include(__DIR__ . "./../template/footer.php"); ?>
