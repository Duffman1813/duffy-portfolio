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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

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
				echo '<p class="
				role_description">'. esc_html( get_field('
				role_description') ) .'</p>';
			 }

			 if ( get_field( 'languages' ) ) {
				echo '<h3 class="
				languages">'. esc_html( get_field('
				languages') ) .'</h3>';
			 }

			 if ( get_field( 'languages_list' ) ) {
				echo '<p class="languages_list">'. esc_html( get_field('languages_list') ) .'</p>';
			 }

			 if ( get_field( 'requirements_title' ) ) {
				echo '<h3 class="requirements_title">'. esc_html( get_field('requirements_title') ) .'</h3>';
			 }

			 if ( get_field( 'requirements_description' ) ) {
				echo '<p class="requirements_description">'. esc_html( get_field('requirements_description') ) .'</p>';
			 }

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'duffy-portfolio' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'duffy-portfolio' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; 
		?>

	</main>

<?php
get_footer();
