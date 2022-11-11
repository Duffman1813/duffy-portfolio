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
            ndforeach; ?>

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

<section class="about-wrapper">

            <?php  

                echo '<section class="about-container">';

					 if ( get_field( 'about_title' ) ) {
						echo '<h2 class="about-title">'. esc_html( get_field('about_title') ) .'</h2>';
					 }

					 if ( get_field( 'about_bio' ) ) {
						echo '<p class="about-bio">'. esc_html( get_field('about_bio') ) .'</p>';
					 }

					 echo '</section>';

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
            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>

            <?php endforeach; ?>
    </ul>
            <?php endif; ?>

</section>
		
		

	</main><!-- #main -->

<?php
get_footer();
