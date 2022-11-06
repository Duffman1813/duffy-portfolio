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
        <p>Front End Web Developer</p>
    </div>

<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

    <div class="front-container">

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
                </a>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
<?php endif; ?>

<section class="about-front">
  <div class="reveal">
    <h2>About Me</h2>
    <div class="text-container">
      <div class="text-box">


      </div>
     
    </div>
  </div>
</section>

<section>
  <div class="reveal">
    <h2>Technical Skills</h2>
    <div class="text-container">
      <div class="text-box">
      
   
      </div>
      <div class="text-box">


      </div>
    </div>
  </div>
</section>

<section>
  <div class="reveal">
    <h2>Contact</h2>
    <div class="text-container">
    <div class="text-box">
      <a href="mailto:duffy13@hotmail.com">
        <h4>Email</h4>
      </a>
      <a href="https://www.linkedin.com">
        <h4>LinkedIn</h4>
      </a>

    </div>
    </div>
  </div>
</section>

</div>

      </main><!-- #main -->

<?php
get_footer();
