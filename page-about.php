<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duffy_Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
<?php      echo '<fieldset class="about-container">';

					 if ( get_field( 'about_title' ) ) {
						echo '<legend class="about-title">'. esc_html( get_field('about_title') ) .'</legend>';
					 }

					 if ( get_field( 'about_bio' ) ) {
						echo '<p class="about-bio">'. esc_html( get_field('about_bio') ) .'</p>';
					 }

					 echo '</fieldset>';

					 if ( get_field( 'skills_title' ) ) {
						echo '<h3 class="skills-title">'. esc_html( get_field('skills_title') ) .'</h3>';
					 }
?>
				<?php 
$images = get_field('skills_gallery');
if( $images ): ?>
    <ul class="skills-gallery">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p class="caption"><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php 
					 if ( get_field( 'skills_title_2' ) ) {
						echo '<h3 class="skills-title">'. esc_html( get_field('skills_title_2') ) .'</h3>';
					 } ?>

<?php 
$images = get_field('skills_gallery_2');
if( $images ): ?>
    <ul class="skills-gallery">
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p class="caption"><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


		
		

	</main><!-- #main -->

<?php
get_footer();
