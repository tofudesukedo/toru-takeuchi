<?php
include 'header.php';
?>

<section class="contact" id="contact" class="py-5" style="margin-top:50px; margin-bottom: 60px ">
  <div class="container">
    <h2 class="text-center mb-5">Contact</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <p>制作の依頼・ご相談などお気軽にお問い合わせくださいませ。</p>

        <form method="post" action="confirm.php">
          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user"></i>
              </span>
            </div>
              <input type="text" name="name" class="form-control" placeholder="お名前">
          </div>

          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
              <input type="text" name="email" class="form-control" placeholder="メールアドレス">
          </div>

          <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-pencil-alt"></i>
              </span>
            </div>
            <textarea class="form-control" type="text" name="message" placeholder="" rows="5"></textarea>
          </div>

          <input type="submit" value="送信" class="btn btn-light btn-block btn-lg">
        </form>


      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
