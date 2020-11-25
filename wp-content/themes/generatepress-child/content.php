<?php
/**
 * The template for displaying posts within the loop.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_do_microdata( 'article' ); ?>>
	<div class="inside-article">
		<?php
		/**
		 * generate_before_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_featured_page_header_inside_single - 10
		 */

		if ( generate_show_entry_header() ) :
			?>
			<header class="entry-header">
                <div class="feat-img">
                    <?php
                        echo get_the_post_thumbnail();
                    ?>
                </div>
                <div class="title-containter">
                    <?php
                    /**
                     * generate_before_entry_title hook.
                     *
                     * @since 0.1
                     */
                    //do_action( 'generate_before_entry_title' );

                    if ( generate_show_title() ) {
                        $params = generate_get_the_title_parameters();

                        the_title( $params['before'], $params['after'] );
                    }

                    /**
                     * generate_after_entry_title hook.
                     *
                     * @since 0.1
                     *
                     * @hooked generate_post_meta - 10
                     */
                    ?>
                    <div id="date_cat">
                        <p>
                            <?php echo get_the_date(); ?>
                        </p>
                        <p>
                            <?php echo get_the_category_list(); ?>
                        </p>
                    </div>

                </div>
			</header>
			<?php
		endif;

		/**
		 * generate_after_entry_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_post_image - 10
		 */

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}

		if ( generate_show_excerpt() ) :
			?>

			<div class="entry-summary"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
				<?php the_excerpt(); ?>

                <a href="<?php echo get_post_permalink(); ?>" class="read-more-link">Continue reading</a>
			</div>

		<?php else : ?>

			<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
						'after'  => '</div>',
					)
				);
				?>
            </div>


			<?php
		endif;

		/**
		 * generate_after_entry_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_footer_meta - 10
		 */

		/**
		 * generate_after_content hook.
		 *
		 * @since 0.1
		 */

		do_action( 'generate_after_content' );
		?>
	</div>
</article>
