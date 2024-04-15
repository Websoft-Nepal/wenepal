
  <!-- =====================>>>>>Footer Started>>>>>======================== -->

  <footer>
    <script>
        var detailsElements = document.querySelectorAll('.truncate-details');

        detailsElements.forEach(function(detailsElement) {
            var detailsText = detailsElement.textContent;
            var wordLimit = 20;

            if (detailsText.split(' ').length > wordLimit) {
                var words = detailsText.split(' ').slice(0, wordLimit).join(' ');
                detailsElement.textContent = words + '...';
            }
        });
    </script>
    <script>
        var detailsElements = document.querySelectorAll('.truncate-title');

        detailsElements.forEach(function(detailsElement) {
            var detailsText = detailsElement.textContent;
            var wordLimit = 5;

            if (detailsText.split(' ').length > wordLimit) {
                var words = detailsText.split(' ').slice(0, wordLimit).join(' ');
                detailsElement.textContent = words + '...';
            }
        });
    </script>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6 col-6">
          <div class="footer-content">
            <h2 style="font-size:18px;"><img src="{{ asset("site/images/logo.png") }}" alt="" style="height: 55px;width:55px;">Wellness & Ecogaurd Nepal</h2>
            <p class="text-justify pr-5" style="font-size: 16px;">Wellness & Ecogaurd Nepal is a non-profit organization that is dedicated to the conservation of the environment and the well-being of the people. We are committed to creating a sustainable future for all.</p>
            <ul class="text-center pr-5">
              <li><i class="fab fa-facebook-f"></i></li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-google"></i></li>
              <li><i class="fab fa-skype"></i></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-4">
          <div class="footer-content">
            <h2>Quick Links</h2>
            <ol>
              <li><a href="{{ route("displayIndex") }}"><i class="fal fa-angle-double-right"></i>Home</a></li>
              <li><a href="{{ route("displayAbout") }}"><i class="fal fa-angle-double-right"></i>About Us</a></li>
              <li><a href="{{ route("displayService") }}"><i class="fal fa-angle-double-right"></i>Services</a></li>
              <li><a href="{{ route("displayBlog") }}"><i class="fal fa-angle-double-right"></i>Blog</a></li>
              <li><a href="{{ route("displayContact") }}"><i class="fal fa-angle-double-right"></i>Contact Us</a></li>
            </ol>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
          <div class="footer-content">
            <h2>News Letters</h2>
            <p>Stay updated with us in our Recent Activities.</p>
            <div class="form-group">
              <input class="form-control" role="" name="email" type="email" placeholder="Enter Your Email">
              <i class="fal fa-paper-plane"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right">
      <div class="container">
        <div class="copy-right-card">
         <p>2024 @ All Rights Reserved Designed and developed by<a
             href="https://www.websoftnepal.com.np">Websoft Technology</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="{{ asset('site/js/fslightbox.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset("site/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("site/js/popper.min.js") }}"></script>
<script src="{{ asset("site/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("site/js/script.js") }}"></script>
