<?php
session_start();
if (isset($_SESSION["id"])) {
    header("Location: artisan_submission.php");
    exit();
}

include_once('../controllers/Registration.php');
?>

<?php include_once('header.php') ?>
    <div class="login">
        <h1>Inscritpion - Little Market</h1>
        <form method="post" action="">
        <span><?php echo $error;?></span>

            <p>
            <input type="text" name="lastname" value="" placeholder="Nom">
            </p>

            <p>
            <input type="text" name="firstname" value="" placeholder="Prénom">
            </p>

            <p>
            <input type="text" name="email" value="" placeholder="Email">
            </p>

            <p>
            <input type="password" name="password" value="" placeholder="Mot de passe">
            </p>

            <p>
            <input type="password" name="confirm_password" value="" placeholder="Confirmer le mot de passe">
            </p>

            <p>
            <a href="login.php">Déjà inscrit ?</a>
        </p>

            <p class="submit"><input type="submit" name="registration" value="Inscription"></p>
        </form>
    </div>

    <?php
include_once('footer.php');
?>