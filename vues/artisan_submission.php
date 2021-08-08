<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit();
}
include_once('../controllers/Submission.php');

?>

<?php include_once('header.php') ?>
<div class="login">
    <h1>Soumission - Little Market</h1>
    <form method="post" action="">
        <span><?php echo $error; ?></span>
        <span><?php echo $success ?></span>

        <p>
            <input type="text" name="name" value="" placeholder="Nom de l'établissement">
        </p>

        <p>
            <input type="tel" name="tel" value="" placeholder="N° de téléphone">
        </p>

        <p>
            <input type="text" name="city" value="" placeholder="Ville">
        </p>

        <p>
            <select name="category" id="category">
                <option value="">Catégories</option>

                <option value="maçonnerie">Maçonnerie</option>

                <option value="mécanique">Mécanique</option>

                <option value="couture">Couture</option>

                <option value="coiffure">Coiffure</option>

                <option value="plomberie">Plomberie</option>

                <option value="soudure">Soudure</option>

                <option value="pressing">Pressing</option>

                <option value="électricité">Electricité</option>

            </select>

        </p>

        <p>
            <textarea class="" placeholder="Description" name="description" rows="4">
                </textarea>
        </p>

        <p class="submit"><input type="submit" name="submission" value="Soumission"></p>
    </form>
</div>
<?php
include_once('footer.php');
?>