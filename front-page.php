<?php 
    get_header();

?>
  <!-- <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
	echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="header-logo ">';
} else {
	echo '<h1>' . get_bloginfo('name') . '</h1>';
}
?> -->

<div class="container-fluid hero-bkg">
     <h1 class="text-center hero-title pb-16 pt-12">Dale Friends - Sculpture & Fine Art</h1>
     <div class="container">
      
        <!-- <div class="content-box"> -->
            <!-- <div class="row">

                <div class="col-12 col-md-4 art-box ">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/FirstLightSculpt.jpg" alt="" class="top-row">
                </div>
                <div class="col-12 col-md-4 art-box ">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/RevealTheStarSculpt.jpg" alt="" class="top-row">
                </div>
            
                <div class="col-12 col-md-4 ms-auto pe-20 art-box ">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/DesertRoseFaceClose.jpg" alt="" class="rose top-row">
                </div>
            </div> -->


            <!-- Sculptures -->

            <!-- static sculptures -->
            
            <!-- <div class="row">

              <div class="col-12 col-md-6 art-box d-flex justify-content-center">
                  
               
                <a id="pop" class="site" data-bs-toggle="modal" data-bs-target="#exampleModal" data-image="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/DesertRoseFaceClose.jpg" 
                data-title="First Light" type="button">
                
          <p><span class="h2 text-center"><em>First Light</em></span>
        <br>
            Height: 24"
            <br>
            <span class="small pt-4"><em>Click for close up view.</em></span>
          </p>

       
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/FirstLightSculpt.jpg" alt="" id="the-modal" style="" class="modal-fade">
                  </a>
                </div>
              

                <div class="col-12 col-md-6 art-box d-flex justify-content-center">
                <a id="pop"  class="site" data-bs-toggle="modal" data-bs-target="#exampleModal" data-image="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" 
                data-title="Reveal The Star" type="button">
                <p><span class="h2 text-center"><em>Reveal The Star</em></span>
        <br>
            Height: 28"
            <br>
            <span class="small pt-4"><em>Click for close up view.</em></span>
          </p>
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/RevealTheStarSculpt.jpg" alt="" id="the-modal" style="" class="modal-fade">
                  </a>
                </div> -->


                
                <!-- <div class="col-12 col-md-6 art-box d-flex justify-content-center">
                <a href="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" id="pop" data-bs-toggle="modal" data-bs-target="#exampleModal" data-image="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" 
                data-title="Reveal The Star" type="button">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/RevealTheStarSculpt.jpg" alt="" id="the-modal" style="width: 400px; height: 600px;" class="modal-fade">
                  </a>
                </div>
               -->

                <!-- <div class="col-12 col-md-6 art-box d-flex justify-content-center">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" alt="">
                </div> -->
                 <!-- <div class="col-12 col-md-6 art-box d-flex justify-content-center vert-2up">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/RevealTheStarSculpt.jpg" alt="">
                </div> -->
            
                <!-- <div class="col-12 col-md-4 ms-auto pe-20 art-box">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/DesertRoseFaceClose.jpg" alt="" class="rose">
                </div> -->
            <!-- </div>
                
            <div class="row">
            <div class="col-12 col-md-6 ms-auto art-box d-flex justify-content-center">
            <a id="pop"  class="site" data-bs-toggle="modal" data-bs-target="" data-image="" 
                data-title="Desert Rose" type="button">
                <p><span class="h2 text-center"><em>Desert Rose</em></span>
        <br>
            Height: 24"
            <br>
            <span class="small pt-4"><em>Click for close up view.</em></span>
          </p>
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/DesertRoseFaceClose.jpg" alt="" class="rose">
</a>
                           
         
                </div>
                <div class="col-12 col-md-6 mx-auto art-box d-flex align-items-center">
                <a id="pop"  class="site" data-bs-toggle="modal" data-bs-target="" data-image="" 
                data-title="Timid Guest" type="button">
                <p><span class="h2 text-center"><em>Timid Guest</em></span>
        <br>
            Height: 24"
            <br>
            <span class="small pt-4"><em>Click for close up view.</em></span>
          </p>
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/TimidGuestSculpt.jpg" alt="">
</a>
                </div>
            </div>
        </div> -->



        <!-- DYNAMIC SCULPTURES -->


        <?php
        $args = array(
          'post_type' => 'sculpture',
          'order' => 'ASC',
          'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);

        // $dimensions = get_field('dimensions');
        // $price = get_field('price');
        ?>

        <div class="content-box d-flex flex-row flex-wrap py-8 px-8">
        <?php if($the_query->have_posts()); ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-12 col-md-6 ms-auto art-box d-flex flex-column justify-content-center align-items-center pb-8">
          <a id="pop" class="site" 
          data-bs-toggle="modal" 
          data-bs-target="#exampleModal" 
          data-image="<?php the_field('close_up_image'); ?>" 
          data-title="<?php the_title(); ?>" type="button">
                
           <div class="d-flex flex-column justify-content-center align-items-center">     
          <p style="background-image: url('<?php the_field("close_up_image"); ?>');  ; background-repeat: no-repeat; background-size: auto 100%; background-position: center;" class="hover-image">
              
          </p>
      </div>
            <?php if(the_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php endif; ?>
           
            </a>
            <h2 class="pt-6 pb-2"><?php the_title(); ?></h2>
            <p class="px-md-2 px-lg-8"><?php the_field('dimensions'); ?></p> 
          </div>

            <?php endwhile; ?>
          </div>
        <?php wp_reset_postdata(); ?>


        <!-- Illustrations -->
        <?php
        $args = array(
          'post_type' => 'illustration',
          'order' => 'ASC',
          'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);

        // $dimensions = get_field('dimensions');
        // $price = get_field('price');
        ?>

        <div class="mt-20 content-box d-flex flex-row flex-wrap py-8 px-8">
        <?php if($the_query->have_posts()); ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-12 col-md-6 ms-auto art-box d-flex flex-column justify-content-center align-items-center pb-8">
          <a id="pop" class="site" 
          data-bs-toggle="modal" 
          data-bs-target="#exampleModal" 
          data-image="<?php the_field('close_up_image'); ?>" 
          data-title="<?php the_title(); ?>" type="button">
                
                
          <p style="background-image: url('<?php the_field("close_up_image"); ?>'); background-size: auto 100%;">
            
           <!-- <span class="text-center"><?php the_field('dimensions'); ?></span> -->
            <br>
            <!-- <span class="text-center pb-12"><?php the_field('price'); ?> </span> -->
            <!-- <?php the_field('dimensions'); ?> -->
            <!-- <span class="small pt-4"><em>Click for close up view.</em></span> -->
            <!-- <img src="<?php the_field('close_up_image'); ?>" alt="" class="hover-image"> -->
              
      </p>
            <?php if(the_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
           
            </a>
            <h2 class="pt-6 pb-2"><?php the_title(); ?></h2>
            <p class="px-md-2 px-lg-8"><?php the_field('dimensions'); ?></p> 
          </div>

            <?php endwhile; ?>
          </div>
        <?php wp_reset_postdata(); ?>
       


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content"> 
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" alt="" style="width: 100%;">
        <!-- <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form> -->
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>

              </div>
              </div>

              <!-- test section with display changing on hover -->
  <!-- <h2>test</h2>
  <div class="container">
  <?php
        $args = array(
          'post_type' => 'sculpture',
          'order' => 'ASC',
          'posts_per_page' => -1,
        );
        $the_query = new WP_Query($args);

       
        ?>

        <div class="content-box d-flex flex-row flex-wrap py-8 px-8">
        <?php if($the_query->have_posts()); ?>
          <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-12 col-md-6 ms-auto art-box d-flex flex-column justify-content-center align-items-center pb-8">
          
    <div class="image-box">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            <img src="<?php the_field("close_up_image"); ?>" alt="" class="">

    </div>
           
            <h2 class="pt-6 pb-2"><?php the_title(); ?></h2>
            <p class="px-md-2 px-lg-8"><?php the_field('dimensions'); ?></p> 
          </div>

            <?php endwhile; ?>
          </div>
        <?php wp_reset_postdata(); ?> -->

  </div>
<?php 
    get_footer(); ?>
