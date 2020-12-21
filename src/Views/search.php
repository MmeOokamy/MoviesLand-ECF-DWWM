<?php include(__DIR__ . "./../Templates/header.php"); ?>

<?php echo '<div  class="active-purple-3 active-purple-4 mb-4"> 
            <div>
            <label for="name">Nom du film</label>
            <input class="form-control" name="name" id="name" type="text" placeholder="rechercher un film" aria-label="Search" required
</div>
             <button id="btn_search" class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </div>'; ?>
<hr>
<?php echo '<div id="list_movies" class="row row-cols-1 row-cols-md-3"> '; ?>

<?php echo '</div>'; ?>


<?php include(__DIR__ . "./../Templates/footer.php"); ?>