<?php

require "./header.php"; ?>
<div class="container d-flex flex-wrap  mt-5 justify-content-around">
    <?php
    $manager = new TitlesManager();
    $titles = $manager->getAll();

    foreach ($titles as $title) : ?>
        <div class="row ">
            <div class="card m-2" style="width: 20rem;">
                <div class="card-body mt-2  ">
                    <h5 class="card-title"><?= $title->getTheme() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <a href class="card-text mt-2"><?= $title->getName() ?></a>
                    <p class="card-text mt-2"><?= $title->getDescription() ?></p>
                    <a href="./deleteTitle.php?id=<?= $title->getId() ?>" class="btn btn-dark mt-2">Supprimer</a>
                    <a href="./updateTitle.php?id=<?= $title->getId() ?>" class="btn btn-dark mt-2">Modifier</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>

</div>
</body>

</html>