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
        <!-- <div class="d-block d-md-none pt-12 pb-16">
            <div class="col-12 col-md-4 d-flex flex-column flex-md-row">
                <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/dale-mug.jpg" alt="" class="w-50">

            </div>
            <div class="col-12 col-md-4 pt-8">

                <p><strong>“I love what I do!”</strong> The feelings portrayed of
        the Southwest is an interest I’ve had my
        whole life.</p>
            </div>
        </div> -->
        
        <div class="content-box">
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


            <div class="row">

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
                </div>


                <!-- <div class="col-12 col-md-6 art-box d-flex justify-content-center">
                <a href="http://localhost:8888/dosamigos/wp-content/uploads/2023/05/RevealTheStar-closeup.jpg" id="pop" data-bs-toggle="modal" data-bs-target="#exampleModal" data-image="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/DesertRoseFaceClose.jpg" 
                data-title="First Light" type="button">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/FirstLightSculpt.jpg" alt="" id="the-modal" style="" class="modal-fade">
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
            </div>
                
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
        </div>
        <div class="content-box mt-24">
            <div class="row">

                <div class="col-12 col-md-6 art-box">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/ArabianSketch.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 art-box">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/EastwoodCaricature.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 art-box">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/GeishaSketch.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 art-box">
                    <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/KabukiSketch.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- test short bio section -->
        <!-- <div class="info pt-20">
        <h2>Dale Friends</h2>
        <p>“I love what I do!” The feelings portrayed of
the Southwest is an interest I’ve had my
whole life. I grew up on the east coast
spending my youth reading, drawing and
painting unique characters from literature
and movies.</p>
</div> -->

<div class=" d-lg-flex flex-row pt-8 pb-8 px-8 content-box mt-24">
            <div class="col-lg-3">

                <img src="http://localhost:8888/dosamigos/wp-content/uploads/2023/04/dale-mug.jpg" alt="" class="mug">
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
     </div>

</div>

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

<?php 
    get_footer(); ?>
