<?php require_once('../template/partial/header.php'); ?>

    <main>

        <h1>Le super blog de la piscine</h1>

        <section id="articles">

            <?php foreach($articles as $article) { ?>

                <article class="articleBlog">
                    <h2> <?php echo $article['titre']; ?> </h2>
                    <!-- <p> <?php echo $article['content']; ?> </p> -->
                    <p class="fontDate"> <?php echo $article['created_at'] ?> </p>
                </article>

            <?php } ?>

        </section>
        
    </main>

<?php require_once('../template/partial/footer.php'); ?>