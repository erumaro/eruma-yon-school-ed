<?php
/**
 * Template part for displaying page content in front-page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eruma_Yon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <section id="intro">
        <h1>Introduktion</h1>
        <blockquote>Tobias har varit en bra resurs för teamet han arbetat i. Han är en social person som inte håller tillbaka om han tror att han kan tillföra något som gör arbetet bättre.<cite> - <a href="https://www.linkedin.com/in/emanuellantz" rel="author">Emmanuel Lantz</a></cite></blockquote>
        <a href="#" type="button">Läs mer</a>
    </section>
    <section id="showcase">
        <h1>Senaste projekten</h1>
        
        <?php
        $queryObject = new WP_Query( 'post_type=portfolio&posts_per_page=2' );
        // The Loop!
        if ($queryObject->have_posts()) {
            ?>
            <div class="front-showcase-wrapper">
            <?php
            while ($queryObject->have_posts()) {
                $queryObject->the_post();
                ?>
                <div id="item-<?php the_ID(); ?>" class="item">
                    <div class="item-content">
                    <?php
                    if ( has_post_thumbnail()) : the_post_thumbnail('large');
                    else : echo '<div class="dummy-image"><i class="fa fa-picture-o" aria-hidden="true"></i>
    </div>';
                    endif;
                    ?>
                    </div>
                    <div class="item-content">
                        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
            <?php
        }
        
        wp_reset_query();
        ?>   
    </section>
	<section id="about" class="entry-content">
        <h1>Kort om mig</h1>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eruma-yon' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'eruma-yon' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i>',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

