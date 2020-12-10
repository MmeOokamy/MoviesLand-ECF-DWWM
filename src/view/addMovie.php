<?php include (__DIR__ . "./../template/header.php"); ?>

<h2>Remplis moi de film !</h2>

<form action="?page=addmovie" method="post">

    <div class="form-group">
        <label for="name">Title du film</label>
        <input class="input is-primary" name="name" id="name" type="text" placeholder="Titre Français ou Original" required>
    </div>

    <div class="form-group">
        <label for="url">Lien vers l'image du film</label>
        <input class="input is-info" name="url" id="url" type="text" placeholder="L'affiche du film de préférence" required>
    </div>

    <div class="form-group">
        <label for="date">Date du film</label>
        <input class="input is-info" name="date" id="date" type="text" placeholder="" required>
    </div>

    <div class="form-group">
        <label for="category">Catégorie</label>
        <input class="input is-info" type="text" placeholder="Ne fonctionne pas encore">
    </div>

    <div class="mt-5 ">
        <input type="hidden" name="success" value="1">
        <button type="submit" class="button is-primary is-normal is-outlined">Ajouter</button>
    </div>

</form>


<?php include (__DIR__ . "./../template/footer.php"); ?>
