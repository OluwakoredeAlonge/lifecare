<!-- footer section -->
<div class="row foot mt-3">
  <div class="col-md-3 mt-3 p-3">
    <h4 class="foot_head">Useful Links</h4>
    <div class="row">
      <div class="col-6">
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none">Home</a></li>
          <li><a href="#" class="text-decoration-none">Blogs</a></li>
          <li><a href="#" class="text-decoration-none">Team</a></li>
          <li><a href="#" class="text-decoration-none">Appointment</a></li>
        </ul>
      </div>
      <div class="col-6">
        <ul class="list-unstyled">
          <li><a href="staff_reg.php" class="text-decoration-none">Staff Sign Up</a></li>
          <li><a href="staff_login.php" class="text-decoration-none">Staff Login</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-6 text-center mt-3">
    <div class="col-6 mx-auto">
      <img src="images/logo.png" alt="Hospital Logo" class="img-fluid">
    </div>
    <div>
    <h4>Subscribe to our Newsletter</h4>
    <form action="processes/newsletter_action.php" method="post">
      <div>
        <input type="email" class="form-control" name="newsletter" placeholder="Enter your email">
        <button class="btn btn-primary mt-3" type="submit" name="sub">Subscribe</button>
      </div>
      <small>We respect your privacy. Unsubscribe at any time.</small>
    </form>
  </div>
  </div>
  <div class="col-md-3 mt-3 p-3">
    <h4 class="foot_head">Contact Us</h4>
    <p>
      <i class="fa-solid fa-location-dot soc"></i>
      <span>Peace Hostel Homes, Abule-Oja, Yaba.</span>
    </p>
    <p>
      <i class="fa-solid fa-phone soc"></i>
      <span>+234 419 914 419</span>
    </p>
    <p>
      <i class="fa-regular fa-envelope soc"></i>
      <a href="mailto:Korebobo@gmail.com" class="text-decoration-none">Korebobo@gmail.com</a>
    </p>
    <div>
      <h4 class="foot_head">Follow Us!</h4>
      <div>
        <a href="#" class="me-3"><i class="fa-brands fa-square-x-twitter social"></i></a>
        <a href="#" class="me-3"><i class="fa-brands fa-facebook social"></i></a>
        <a href="#" class="me-3"><i class="fa-brands fa-instagram social"></i></a>
        <a href="#" class="me-3"><i class="fa-brands fa-youtube social"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <h6 class="text-center foot_head">
      Design & Developed By Bouffdaddy 2024
    </h6>
  </div>
</div>
    </div>
    <script src="jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
    <script>
      $(document).ready(function(){
        $(".headtext").addClass("animate__animated animate__bounceInLeft");
      })
      function count() {
      const textarea = document.getElementById('message');
      const count = textarea.value.length;
      const max = textarea.maxLength;
      const counter = document.getElementById('counter');
      counter.textContent = max - count;
    }
    function counter() {
      const textarea = document.getElementById('message2');
      const count = textarea.value.length;
      const max = textarea.maxLength;
      const counter = document.getElementById('counter2');
      counter.textContent = max - count;
    }
    </script>
</body>
</html>