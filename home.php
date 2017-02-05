<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Home
 * @package Bisi\'s_Wordpress_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
  <div class = "carousel">
  <?php 
    $query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' =>  10,
    'tax_query' => array(
        array(
            'taxonomy' => 'category_media',
            'field'    => 'slug',
            'terms'    => 'slideshow',
        )
    )
  );
  
  $query_images = new WP_Query( $query_images_args );

  $images = array();
  foreach ( $query_images->posts as $image ) {
      echo('<div class="slide" style="background-image: url('. wp_get_attachment_url( $image->ID ).')"></div>');
  }
  ?>   
    </div>

    <div class = "fukol-grid monthly-content">
      <div class = "article-of-the-month">
        <h2>Article of the Month</h2>
         <?php $query1 = new WP_Query( array('tag' => 'article-of-the-month'), array('category' => 'articles'), array('posts_per_page' => 1))  ?>
              <?php $id1 = get_the_ID();?>
               <?php while ($query1 -> have_posts() && $counter1 < 1 ) : $query1 -> the_post(); ?>
               <div class="article-preview">
              <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                      <?php the_excerpt(); ?>
                    </div>
  	                </div> <!-- closes the first div box -->
              <?php $counter1 ++ ?>
             <?php endwhile; ?>
            </div>
      <div class = "video-of-the-month">
        <h2>Video of the month</h2>
        <div class="video">
          <?php $counter2 = 0; ?>
          <?php $query2 = new WP_Query( array('tag' => 'video-of-the-month'), array('category' => 'videos'), array('posts_per_page' => 1))  ?>
               <?php while ($query2 -> have_posts() && $counter2 < 1 ) : $query2 -> the_post(); ?>
               <div class="video">
                      <?php the_content(); ?>
                    </div>
  	                </div> <!-- closes the first div box -->
             <?php $counter2 ++; endwhile; ?>
          </div>
      <div class = "interview-of-the-month">
        <h2>Interview of the Month</h2>
        <?php $query3 = new WP_Query( array('tag' => 'interview-of-the-month'), array('category' => 'interview'), array('posts_per_page' => 1))  ?>
            <?php $counter3 = 0?>
            <?php while ( $query3 -> have_posts() && $counter3 < 1 ) : $query3 -> the_post();  ?>
               <div class="article-preview">
              <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                      <?php the_excerpt(); ?>
                    </div>
  	                </div> <!-- closes the first div box -->
              <?php $counter3 ++ ?>
             <?php endwhile;?>
            </div>
      </div>

    <div class = "fukol-grid lower-content">
      <div class = "youtube-playlist">
        <h2>Talking Straight cos I'm Gay'</h2>
        <iframe width="100%" height="360" src="https://www.youtube.com/embed/videoseries?list=PLhPV2ey8GgNJC7sAr_AmT8ZxAF2hLNk1Z" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class = "upcoming-engagements">
        <h2>Upcoming Engagements</h2>
      </div>
    </div>

    <div class = "fukol-grid media-links">
      <div class = "media-logos">
        <div class = "media-hover-links fukol-grid">
          <a href="/print">Print</a>
          <a href="/television">Television</a>
        </div>
      </div>
    </div>
		<?php
		/*if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>

			<?php
			endif;

     
			/* Start the Loop */
			// while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_format() );

			// endwhile;

			// the_posts_navigation();

		// else :

			// get_template_part( 'template-parts/content', 'none' );

		// endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
