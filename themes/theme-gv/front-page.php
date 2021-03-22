<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-gv
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
				convertirTableu($tPropriété);
                
				
				    if($tPropriété['typeCours'] != $precedent): 
					if("XXXXXX" != $precedent):  ?>
					    </section> 
					<?php endif ?>
						<h2> <?php echo $tPropriété['typeCours'] ?> </h2>
						<section>
					<?php endif ?>

				   <!-- <article>
					    <p> <?php echo $tPropriété['sigle'] . " - " . $tPropriété['typeCours'] . " - " . $tPropriété['nbHeure']; ?> </p>
						<a href="<?php echo get_permalink() ?>"> <?php echo $tPropriété['titrePartiel']; ?> </a>
						<p>Session : <?php echo $tPropriété['session']; ?></p>
					</article> -->
				
				<?php get_template_part( 'template-parts/content', 'cours-article' );
			$precedent = $tPropriété['typeCours'];
			endwhile; ?>
			</section>
			<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirTableu(&$tPropriété)
{

	/* $titre = get_the_title();
				$sigle = substr($titre, 0, 7);
				$nbHeure = substr($titre, -4, 3);
				$titrePartiel = substr($titre, 8, -6);
                $session = substr($titre, 4,1);
				//$contenu = get_the_content();
				//$resume = substr($contenu, 0, 200);
				$typeCours = get_field('type_de_cours'); */

	$tPropriété['titre'] = get_the_title();
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'], -4, 3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'], 8, -6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');


}
