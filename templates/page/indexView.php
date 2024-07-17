<?php require_once('../templates/partial/header.php'); ?>

    <main>
        <h1 id="h1Main">Le super blog de la piscine</h1>

        <h2 id="h2Main">Liste des nouveaux articles :</h2>
            <br><br>

            <div class="flex">
                <?php foreach($articles as $article){ ?>
                    <article class="articleBDD">
                            <h2><?php echo $article['title']; ?></h2>
                            <p><?php echo $article['content']; ?></p>
                            <p><?php echo $article['date']; ?></p>
                            <br>
                    </article>
                <?php } ?>       
            </div>
    </main>

<?php require_once('../templates/partial/footer.php'); ?>