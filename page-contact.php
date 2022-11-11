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

    <div class="context">
        <?php
   the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
    </div>

<div class="area" >
            <ul class="circles">
            <?php 
$images = get_field('skills_gallery', 10);
if( $images ): ?>
 
        <?php foreach( $images as $image ): ?>
            <li>
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </li>
        <?php endforeach; ?>

<?php endif; ?>

<?php 
$skills2 = ( get_field('skills_title_2', 10));
if( $skills2): ?>
  <?php endif; ?>

<?php 
$images = get_field('skills_gallery_2', 10);
if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            <li>
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
        <?php endforeach; ?>

<?php endif; ?>
            </ul>
        </div>




		<?php
		while ( have_posts() ) :
			the_post();
			
			echo '<section class="contact-form">'. do_shortcode('[wpforms id="68"]') .'</section>';?>

		<?php endwhile; ?>

		<section class="contact-menu">

		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-contact',
					'menu_id'        => 'menu-contact',
				)
			);
			?>

		</section>

		</div>

	</main><!-- #main -->

<?php
get_footer();

