<?php
include 'header-english.php';
?>

<section class="contact" id="contact" class="py-5" style="margin-top:50px; margin-bottom: 60px ">
  <div class="container">
    <h2 class="text-center mb-5">Contact</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <p>Please feel free to contact me anything about about my service.</p>

        <form method="post" action="confirmeng.php">
          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
            </div>
              <input type="text" name="name" class="form-control" placeholder="name">
          </div>

          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
              <input type="text" name="email" class="form-control" placeholder="email-address">
          </div>

          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-pencil-alt"></i>
              </span>
            </div>
            <textarea class="form-control" type="text" name="message" placeholder="" rows="5"></textarea>
          </div>

          <input type="submit" value="Submit" class="btn btn-light btn-block btn-lg">
        </form>


      </div>
    </div>
  </div>
</section>

<?php
include 'footer-english.php';
?>
