<?php
require("./header.php");

$manager = new TitlesManager();
$title = $manager->getById($_GET["id"]);

if ($_POST) {
    $title->hydrate($_POST);
    $manager->update($title);



    echo "<script>window.location.href='./index.php'</script>";
}
?>

<div class="container text-white mt-4 ">
    <h3>Modifier l'article </h3>
    <form method="post">
        <label for="form-label">Titre</label>
        <input type="text" class="form-control -lg mt-1 mb-5" id="theme" name="theme" value="<?= $title->getTheme() ?>" placeholder=" Titre">
        <label for="form-label">Url</label>
        <input type="text" class="form-control -lg mt-1 mb-5" id="name" name="name" value="<?= $title->getName() ?>" placeholder=" Name">
        <label for="form-label">Description</label>
        <textarea class="form-control -lg mt-1 mb-5 " name="description" id=" description" placeholder="Description" rows="3"><?= $title->getDescription() ?></textarea>
        <input type="submit" value="Enregistrer" class="btn btn-light btn-lg mt-3"></input>
    </form>
</div>