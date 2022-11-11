<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Duffy_Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

<div class="project-wrapper">
   <?php if (function_exists('get_field')):?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			echo '<section class="project-page">';

			if ( get_field( 'overview_title' ) ) {
				echo '<h3 class="overview-title">'. esc_html( get_field('overview_title') ) .'</h3>';
			 }

			 if ( get_field( 'overview' ) ) {
				echo '<p class="overview">'. esc_html( get_field('overview') ) .'</p>';
			 }

			 if ( get_field( 'role_title' ) ) {
				echo '<h3 class="role-title">'. esc_html( get_field('role_title') ) .'</h3>';
			 }

			 
			 if ( get_field( 'role_description' ) ) {
				echo '<p class="role-description">'. esc_html( get_field('role_description') ) .'</p>';
			 }

			 if ( get_field( 'languages' ) ) {
				echo '<h3>'. esc_html( get_field('languages') ) .'</h3>';
			 }

			 if ( get_field( 'languages_list' ) ) {
				echo '<p class="languages-list">'. esc_html( get_field('languages_list') ) .'</p>';
			 }

			 if ( get_field( 'requirements_title' ) ) {
				echo '<h3 class="requirements-title">'. esc_html( get_field('requirements_title') ) .'</h3>';
			 }

			 if ( get_field( 'requirements_description' ) ) {
				echo '<p class="requirements-description">'. esc_html( get_field('requirements_description') ) .'</p>';
			 }
		
			  echo '</section>';
			  ?>



<section class="link-buttons">
			 <?php 
			 $link = get_field('live_site');
			 if( $link ): ?>
				 <a class="button" href="<?php echo esc_url( $link ); ?>">Live Site</a>
			 <?php endif; ?>

			 <?php 
			 $link2 = get_field('github_link');
			 if( $link ): ?>
				 <a class="button" href="<?php echo esc_url( $link2 ); ?>">Github Repo</a>
			 <?php endif; ?>

			 </section>

			 <div class="design-process">

<?php 
 if ( get_field( 'design_title' ) ) {
	echo '<h3 class="design-title">'. esc_html( get_field('design_title') ) .'</h3>';
 }

$images = get_field('design_gallery');
if( $images ): ?>
<ul class="design-gallery">
<?php foreach( $images as $image ): ?>
<li>
  <img src="<?php echo esc_url($image['sizes']['landscape-blog']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php
if ( get_field( 'design_description' ) ) {
				echo '<p class="design-description">'. esc_html( get_field('design_description') ) .'</p>';
			 }
			 ?>

</div>


			 <section >
			 <?php

			 the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( '<-', 'duffy-portfolio' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-title">%title</span> <span class="nav-subtitle">' . esc_html__( '->', 'duffy-portfolio' ) . '</span>',
				)
			);

		endwhile; 
		?>
		</section>

		<?php endif; ?>

</div>

	</main>

<?php
get_footer();
