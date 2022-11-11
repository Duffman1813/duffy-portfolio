<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duffy_Portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

<?php				
$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => -1,
	'tax_query'      => array(
        array (
            'taxonomy' => 'project-category',
            'field'    => 'slug',
            'terms'    => 'design'
        ),
    ),
);
 
$query = new WP_Query( $args );
 
if ( $query->have_posts() ) {
	echo '<section class="archive-projects"><h2>' . esc_html__( 'Design', 'projects' ). '</h2>';
    while ( $query->have_posts() ) {
        $query->the_post();
		?>

<article>

	<a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('project-page')?>
		<h3><?php the_title(); ?></h3>

<?php
if ( get_field( 'overview_title' ) ) {
				echo '<h4 class="overview-title">'. esc_html( get_field('overview_title') ) .'</h4>';
			 }

             if ( get_field( 'overview' ) ) {
				echo '<p class="overview">'. esc_html( get_field('overview') ) .'</p>';
			 }

             ?>
             <h4>Learn More -></h4>
	</a>
</article>

		<?php
    }
    wp_reset_postdata();
	echo '</section>';
} 
?>

<?php				
$args = array(
    'post_type'      => 'projects',
    'posts_per_page' => -1,
	'tax_query'      => array(
        array (
            'taxonomy' => 'project-category',
            'field'    => 'slug',
            'terms'    => 'development'
        ),
    ),
);
 
$query = new WP_Query( $args );
 
if ( $query->have_posts() ) {
	echo '<section class="archive-projects"><h2>' . esc_html__( 'Development', 'projects' ). '</h2>';
    while ( $query->have_posts() ) {
        $query->the_post();
		?>

<article>

	<a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('project-page');?>
		<h3><?php the_title(); ?></h3>

        <?php
if ( get_field( 'overview_title' ) ) {
				echo '<h4 class="overview-title">'. esc_html( get_field('overview_title') ) .'</h4>';
			 }

             if ( get_field( 'overview' ) ) {
				echo '<p class="overview">'. esc_html( get_field('overview') ) .'</p>';
			 }

             ?>
                <h4>Learn More -></h4>
	</a>

</article>

		<?php
    }
    wp_reset_postdata();
	echo '</section>';
} 
?>
	</main><!-- #primary -->

<?php
get_footer();
