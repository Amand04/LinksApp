<?php
require("./header.php");

$manager = new TitlesManager();

if ($_POST) {
    $title = new Title($_POST);
    $manager->create($title);

    echo "<script>window.location.href='./index.php'</script>";
}
?>


<div class="container text-white mt-2">
    <form method="post" class="form">
        <label for="form-label">Thème</label>
        <input type="text" class="form-control -lg" id="theme" name="theme">
        <label for="form-label">Url</label>
        <input type="text" class="form-control -lg" id="name" name="name">
        <label for="form-label">Description</label>
        <textarea class="form-control -lg " name="description" id="description" rows="3"></textarea>
        <input type="submit" value="Enregistrer" class="btn btn-light btn-lg mt-3"></input>
    </form>
</div>