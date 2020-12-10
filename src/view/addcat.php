<?php include(__DIR__ . "./../template/header.php"); ?>


<div class="row row-cols-1 row-cols-md-4">


    <form action="?page=addcat" method="post">

        <div class="form-group mt-5">
            <label for="name">Title de La Catégorie</label>
            <input class="input is-primary" name="name" id="name" type="text" placeholder="category"
                   required>
        </div>
        <div class="mt-5 ">
            <input type="hidden">
            <button type="submit" class="button is-primary is-normal is-outlined">Ajouter</button>
        </div>

    </form>
</div>
<?php include(__DIR__ . "./../template/footer.php"); ?>
