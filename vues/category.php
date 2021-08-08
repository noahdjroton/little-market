<?php
include_once('header.php');
include_once('../controllers/Category.php');
?>


<section>
    <div class="category">
        <h3><?php echo $_GET['category']; ?></h3>

    </div>



    <?php
    foreach ($artisans as $artisan) {
    ?>
        <div class="artisan">
            <h3>
                <p>
                    <span class="title">Etablissement: </span>

                    <span class="data"><?php echo $artisan['name']; ?>

                    </span><br />
                    <span class="title">Catégorie: </span>

                    <span class="data"><?php echo $artisan['category']; ?>

                    </span><br />
                    <span class="title">Ville: </span>

                    <span class="data"><?php echo $artisan['city']; ?>

                    </span><br />
                    <span class="title">Téléphone</span>

                    <span class="data"><?php echo $artisan['tel']; ?>

                    </span>
                </p>

        </div>
    <?php
    }
    ?>

</section>

<?php
include_once('footer.php');
?>