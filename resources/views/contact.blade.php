@extends('template.main')
@section('kongten')
     <!-- Main content -->
     <section class="container tm-contact-main">
      <div class="row">
        <div id="google-map"></div>
      </div>
      <div class="row">
        <div class="contact-form-container">
          <h2 class="contact-title">Contact Us</h2>
          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Drbi accumsan ipsum velit.</p>
          <form action="#" method="post" class="tm-contact-form">
              <div class="col-lg-5 col-md-5 contact-form-left">
                <div class="form-group">
                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                </div>
                <div class="form-group">
                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                </div>
                <div class="form-group">
                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                </div>                
              </div>
              <div class="col-lg-7 col-md-7 contact-form-right">
                <div class="form-group margin-bottom-0">
                    <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 submit-btn-container">
                <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>  
              </div>                        
          </form>
        </div>
      </div>
      <!--banner-->
      <div class="row">
        <div class="tm-banner">
          <h2 class="tm-banner-title">Maecenas</h2>
          <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
          <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
        </div>  
      </div>      
    </section>

    <!-- End Main content -->
@endsection