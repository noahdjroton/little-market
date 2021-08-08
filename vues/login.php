<?php
session_start();
if (isset($_SESSION["id"])) {
    header("Location: artisan_submission.php");
    exit();
}
include_once('../controllers/Login.php');
?>

<?php include_once('header.php') ?>
<div class="login">
    <h1>Connexion - Little Market</h1>
    <form method="post" action="">
        <span><?php echo $error; ?></span>
        <p>
            <input type="text" name="email" value="" placeholder="Email">
        </p>
        <p>
            <input type="password" name="password" value="" placeholder="Mot de passe">
        </p>

        <p>
            <a href="registration.php">Pas encore inscrit ?</a>
        </p>

        <p class="submit"><input type="submit" name="login" value="Connexion"></p>
    </form>
</div>
<?php
include_once('footer.php');
?>