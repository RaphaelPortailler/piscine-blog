<?php require_once("../templates/partial/header.php"); ?>

    <main>

        <h1>Le super blog de la piscine</h1>

        <article>
            <h2><?php echo $article['title']; ?></h2>
            <p><?php echo $article['content']; ?></p>
            <p><?php echo $article['date']; ?></p>
        </article>


    </main>

<?php require_once("../templates/partial/footer.php"); ?>