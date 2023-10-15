  <footer>
      <div class="content">
          <div class="left box">
              <div class="upper">
                  <div class="topic1"><a href="/index.php"></a>Home</div>
                  <div><a href="/about.php">About Us</a></div>
                  <div><a href="#">Reviews</a></div>
                  <div><a href="#">Get Directions</a></div>
                  <div><a href="#">Nearby Views</a></div>
                  <div><a href="/contact.php">Contact Us</a></div>

              </div>
          </div>
          <div class="middle box">
              <div class="topic">Customer Help</div>
              <div><a href="#">Guest Support</a></div>
              <div><a href="#">Guest Feedback</a></div>
              <div><a href="#">FAQS</a></div>
              <div><a href="#">Offers</a></div>
              <div><a href="#">Location</a></div>

          </div>
          <div class="middle box">
              <div class="topic">Services</div>
              <div><a href="#">Tour Packages</a></div>
              <div><a href="#">Accodomation</a></div>
              <div><a href="#">Security</a></div>
              <div><a href="#">Cleaniness</a></div>
              <div><a href="#">Management</a></div>
          </div>

          <div class="right box">
              <div class="topic1"><a href="/contact.php"></a>Contact</div>

              <h6><?php echo $contact_r['address'] ?></h6>
              <div class="media-icons">
                  <a href="<?php echo $contact_r['fb'] ?>"><i class="fab fa-facebook-f"></i></a>
                  <a href="<?php echo $contact_r['insta'] ?>"><i class="fab fa-instagram"></i></a>
                  <a href="<?php echo $contact_r['tw'] ?>"><i class="fab fa-twitter"></i></a>

              </div>
          </div>

      </div>
      <br><br>
      <div class="bottom ">
          <b><strong>
                  <p>Copyright © 2023 thehaweliresorts | Powered by https://teksila.in/</p>
              </strong><b>
      </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
      function setActive() {
          let navbar = document.getElementById('nav-bar');
          let a_tags = navbar.getElementsByTagName('a');

          for (i = 0; i < a_tags.length; i++) {
              let file = a_tags[i].href.split('/').pop();
              let file_name = file.split('.')[0];

              if (document.location.href.indexOf(file_name) >= 0) {
                  a_tags[i].classList.add('active');
              }
          }
      }
      setActive();
  </script>