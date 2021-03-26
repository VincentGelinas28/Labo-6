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

<section class="carrousel">
	
    <article class="slide_conteneur">
		<div class="slide">
			<div class="slide_info">
			<img src="" alt="">
			<p>582-1W1 - Web - 75h</p>
			<a href="http://localhost/4w4-wordpress/582-1w1-mise-en-page-web-75h/">Mise en page Web</a>
			<p>Session : 1</p>
			</div>
		</div>
	</article>

    <article class="slide_conteneur">
		<div class="slide">
			<img src="" alt="">
			<div class="slide_info">
			<p>582-2W2 - Web - 75h</p>
			<a href="http://localhost/4w4-wordpress/582-2w2animation-et-interactivite-web-75h/">Animation et interactivité Web</a>
			<p>Session : 2</p>
			</div>
		</div>
	</article>

    <article class="slide_conteneur">
		<div class="slide">
			<img src="" alt="">
			<div class="slide_info">
			<p>582-3W3 - Web - 90h</p>
			<a href="http://localhost/4w4-wordpress/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
			<p>Session : 3</p>
			</div>
		</div>
	</article>
	<article class="slide_conteneur">
		<div class="slide">
			<img src="" alt="">
			<div class="slide_info">
			<p>582-4W4 - Web - 90h</p>
			<a href="http://localhost/4w4-wordpress/582-4w4-conception-dinterfaces-et-developpement-web/">Conception d’interfaces et développement Web</a>
			<p>Session : 4</p>
			</div>
		</div>
	</article>
	<article class="slide_conteneur">
		<div class="slide">
			<img src="" alt="">
			<div class="slide_info">
			<p>582-5PA - Web - 60h</p>
			<a href="http://localhost/4w4-wordpress/582-5pa-technologies-emergentes-et-avancees-volet-programmation-60h/">Technologies émergentes et avancées – volet Programmation</a>
			<p>Session : 5</p>
			</div>
		</div>
	</article>
</section>

<section class="radio">
<!-- <button id="un">1</button>
<button id="deux">2</button>
<button id="trois">3</button> -->
<input type="radio" name="radio" id="un" />
<input type="radio" name="radio" id="deux" />
<input type="radio" name="radio" id="trois" />
<input type="radio" name="radio" id="quatre" />
<input type="radio" name="radio" id="cinq" />
</section>


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
