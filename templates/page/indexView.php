<?php require_once('../templates/partial/header.php'); ?>

    <main>

        <h1>Le super blog de la piscine</h1>

        <section id="articles">

		<h2>Les derniers articles</h2>

	    	<?php foreach($articles as $article) { ?>

                <article>
                    <h2><?php echo $article['title']; ?></h2>
                    <!-- génère un lien pour accéder à la page qui affiche un article, en ajoutant l'id de l'article à la fin de l'url -->
                    <a href="http://localhost/php/blog-piscine/public/show-article?id=<?php echo $article['id']; ?>">
                        Afficher l'article
                    </a>
                    <a href="http://localhost/php/blog-piscine/public/delete-article?id=<?php echo $article['id']; ?>">
                        Supprimer l'article
                    </a>
                </article>


            <?php } ?>

        </section>
        
    </main>

<?php require_once('../templates/partial/footer.php'); ?>