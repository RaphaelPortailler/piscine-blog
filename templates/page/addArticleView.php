<?php require_once("../templates/partial/header.php"); ?>

    <main>

        <h1>Ajouter un article</h1>


        <?php if ($isRequestOK) { ?>

            <p>L'article a bien été enregistré en BDD</p>

        <?php } else {?>
            <p>Article non enregistré</p>
        <?php } ?>

    </main>

<?php require_once("../templates/partial/footer.php"); ?>