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
        <h1>Shaun Duffy</h1>
        <h3>Front End Web Developer</h3>
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
    
    <div class="front-container">
    <div class="reveal">

<?php	
	$args = array(
		'post_type'      => 'projects',
		'posts_per_page' => 6,
	);
 
$query = new WP_Query( $args );
 
if ( $query -> have_posts() ) : ?>

<div class="projects-title">
   <h2>Projects</h2>
</div>

    <section class="projects">
        <?php
        while ( $query -> have_posts() ) :
            $query -> the_post(); 
            ?>
            <article class="home-projects">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('landscape-blog'); ?>
                    <h3><?php the_title(); ?></h3>
                    <span>Learn More -></span>
                </a>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
<?php endif; ?>
</div>

<section class="about-front">
  <div class="reveal">
    <h2>About Me</h2>
    <div class="text-container">
      <div class="text-box">

      <?php if( get_field('about_bio', 10) ): ?>
<?php the_field('about_bio', 10); ?>
<?php endif; ?>


      </div>
     
    </div>
  </div>
</section>

<section class="skills">
  <div class="reveal">
    <h2>Technical Skills</h2>
    <div class="text-container">
      <div class="text-box">

<?php 
$skills1 = ( get_field('skills_title', 10));
if( $skills1): ?>
  <h3 class="caption"><?php echo esc_html($skills1); ?></h3>
  <?php endif; ?>


<?php 
$images = get_field('skills_gallery', 10);
if( $images ): ?>
    <ul class="skills-gallery">
    <?php foreach( $images as $image ): ?>
            <li>
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    
      </div>
      <div class="text-box">

<?php 
$skills2 = ( get_field('skills_title_2', 10));
if( $skills2): ?>
  <h3 class="caption"><?php echo esc_html($skills2); ?></h3>
  <?php endif; ?>

<?php 
$images = get_field('skills_gallery_2', 10);
if( $images ): ?>
    <ul class="skills-gallery">
    <?php foreach( $images as $image ): ?>
            <li>
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


      </div>
    </div>
  </div>
</section>

<section class="contact-info">
  <div class="reveal">
    <h2>Contact</h2>
    <div class="text-container">
    <div class="contact-menu">
 
    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-contact',
					'menu_id'        => 'menu-contact',
				)
			);
			?>

    </div>
    </div>
  </div>
</section>

</div>

      </main><!-- #main -->

<?php
get_footer();
