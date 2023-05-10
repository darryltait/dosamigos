<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="container page-content py-4" role="main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article <?php post_class( 'group' ); ?> role="article">
    <!-- <h1><?php the_title(); ?></h1> -->
    <?php the_content(); ?>
  </article>

  <?php endwhile; endif; ?>


  <div class=" d-lg-flex flex-row pt-8 pb-8 px-8 content-box mt-24">
            <div class="col-lg-3">

            <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/Dale-Janice-scaled.jpeg" alt="" class="mug">
            </div>

                
                    
                    <p class="col-lg-9 ps-8 d-flex flex-column justify-content-center"><strong>“I love what I do!”</strong> The feelings portrayed of
the Southwest is an interest I've had my
whole life. I grew up on the east coast
spending my youth reading, drawing and
painting unique characters from literature
and movies.
Originally I started out as an Architectural
Draftsman and spent time working with
consulting engineers in New York. However
I felt a need to expand my horizons and
enrolled in the Art Institute of Fort Lauderdale.
My career spans over 30 years as a
Graphic Designer in Pennsylvania, New York
and Florida, with clients as varied as Corning
Glass Works, IBM, Visit Florida and the Key
West tourism industry. I have a background
of illustration, painting, computer design,
sign design and now I have finally have the
opportunity to sculpt and find it more
challenging than anything created previously.
I've waited a long time to pursue my
love of the Southwest in this venue.
In my sculptures I try to capture a moment
from a film or book and change it around to
suit an emotion I'm trying to convey. Occasionally
I use friends faces and put them into
a scene and once I've even sculpted a self
portrait as well.
I enjoy expressing and sharing my work.
Most sculptures take me 10 months to a year
to produce, and each one is a learning
experience. As an artist I don't ever want to
stop learning!</p>
        </div>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
