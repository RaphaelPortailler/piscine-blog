<?php require_once('../templates/partial/header.php'); ?>

    <main>

        <h1>Le super blog de la piscine</h1>

        <section id="articles">

            <?php foreach($articles as $article) { ?>

                <article class="articleBlog">
                    <!-- génère un lien pour accéder à la page qui affiche un article, en ajoutant l'id de l'article à la fin de l'url -->
                    <a href="http://localhost/php/blog-piscine/controller/AddArticle?id=2<?php echo $article['id']; ?>">
                        Afficher l'article
                    </a>
            
                </article>

            <?php } ?>

        </section>
        
    </main>

<?php require_once('../templates/partial/footer.php'); ?>