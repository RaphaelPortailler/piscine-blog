<?php require_once('../templates/partial/header.php'); ?>

    <main>

        <h1>Le super blog de la piscine</h1>

        <section id="articles">

            <?php foreach($articles as $article) { ?>

                <article class="articleBlog">
                    <h2> <?php echo $article['title']; ?> </h2>
                    <p> <?php echo $article['content']; ?> </p>
            
                </article>

            <?php } ?>

        </section>
        
    </main>

<?php require_once('../templates/partial/footer.php'); ?>