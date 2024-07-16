<?php require_once('../templates/partial/header.php'); ?>

    <main>

        <h1 id="h1Main">Le super blog de la piscine</h1>

        <h2>Liste des nouveaux articles :</h2>
        <br><br>

        <?php foreach($articles as $article){ ?>
            <article>
                <h2><?php echo $article['title']; ?></h2>
                <p><?php echo $article['content']; ?></p>
                <p><?php echo $article['created_at']; ?></p>
                <br>
            </article>
        <?php } ?>

    </main>

<?php require_once('../templates/partial/footer.php'); ?>