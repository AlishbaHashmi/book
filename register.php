<?php
  include('header.php');
  include ('topbar.php');
  ?>

  <br>
  <br>
  <br>
  <br>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="./img/register.JPG"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
         <!-- Name input -->
         <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4"><h6>Name</h6></label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter name" required />
           
          </div>
        

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3"><h6>Email address</h6></label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address"  required/>
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4"><h6>Password</h6></label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required />
           
          </div>
           <!-- Repeat Password input -->
           <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4"><h6>Repeat Password</h6></label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" required />
           
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-warning btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>
<?php
  include('footer.php');
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>