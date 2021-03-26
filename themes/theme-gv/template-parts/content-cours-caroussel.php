<?php
/**
 * Template part for pour l'affichage des cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-gv
 */
global $tPropriété;
?>

<article>
	<?php /* the_post_thumbnail('thumbnail'); */ ?>
    <p> <?php echo $tPropriété['sigle'] . " - " . $tPropriété['typeCours'] . " - " . $tPropriété['nbHeure']; ?> </p>
	<a href="<?php echo get_permalink() ?>"> <?php echo $tPropriété['titrePartiel']; ?> </a>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>
