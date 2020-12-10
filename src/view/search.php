<?php include(__DIR__ . "./../template/header.php"); ?>

<?php echo '<div  class="active-purple-3 active-purple-4 mb-4"> 
            <div>
            <label for="query">Nom du film</label>
            <input class="form-control" name="query" id="query" type="text" placeholder="rechercher un film" aria-label="Search" required
</div>
             <button id="search" class="btn btn-outline-success my-2 my-sm-0">Search</button>
    </div>'; ?>
<hr>
<?php echo '<div id="list_movie"> '; ?>

<?php echo '</div>'; ?>


<?php include(__DIR__ . "./../template/footer.php"); ?>