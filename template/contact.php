<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading text-muted">Pelayanan Terbaik adalah prioritas kami</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <form name="sentMessage" action="mail/contact_me.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control"name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="subject" type="tel" placeholder="Subject *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                  
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input name="submit" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Send Mail" />
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-6">
            <div class="row">
            <div class="col-lg-12">
                <div id="map"></div>
                <p class="section-heading"></p>
                <p class="section-heading">Komp Penuin Centre Blok F No.14 Lubuk Baja Batam</p>
                <p class="section-heading">Telephone: 0778 427566 / 427577</p>
                <p class="section-heading">E-mail: official@bprkg.co.id </p>
                
                <script>
                  function initMap() {
                    var uluru = {lat: 1.136970, lng: 104.008284};
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 4, center: uluru});
                    var marker = new google.maps.Marker({position: uluru, map: map});
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAP9LJpMSlXcGruNGtQYPHidRqn45yTIc&callback=initMap">
                </script>
            </div>
          </div>
        </div>
        </div>
      </div>
