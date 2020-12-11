<?php
private $alert;
if (isset($_POST['name']) && !empty($_POST['name'])) {
    $request =   $this->model->addMovie($_POST['name'], $_POST['url'], $_POST['date'], $_POST['category']);

if ($request === true) {
    $alert = '<div class="alert alert-success mt-5">Votre film a été sauvegardé avec succes !</div>';
} elseif(false) {
    $alert = '<div class="alert alert-warning mt-5">Votre film n\'a pas été sauvegardé !</div>';
} else {
    $alert = null;
}
}


/**
 *
 *
 */
echo'<div class="alert alert-success mt-5">
            Votre catégorie a été sauvegardé !</div>';

echo'<div class="alert alert-warning mt-5">
            Votre catégorie n\'a pas été sauvegardé !</div>';

echo'<div class="alert alert-warning mt-5">
            Votre film n\'a pas été sauvegardé !</div>';

echo'<div class="alert alert-success mt-5">
            Votre film a été sauvegardé !</div>'; ?>

<?php if (isset($success)): ?>
    <?php if ($success === true): ?>
        <div class="alert alert-success mt-5">
            Votre film a été sauvegardé avec succes !
        </div>
    <?php else: ?>
        <div class="alert alert-warning mt-5">
            Votre film n'a pas été sauvegardé !
        </div>
    <?php endif; ?>
<?php endif; ?>

/**

<?php if(isset($alerte)): ?>
    <div>
        <?php echo $alerte; ?>
    </div>
<?php endif;?>


<?php foreach ($this->listeCategory as $category):?>

    <label for="category select">Choisir une catégorie :</label>

    <select name="category" id="category">
        <option value=""><?= $category['category_name']; ?></option>
    </select>

<?php endforeach; ?>