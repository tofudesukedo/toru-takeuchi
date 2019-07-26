<?php
include 'header.php';

// 値の受け取り
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
?>

<section style="margin-top:100px;">
  <div class="container">
    <h2 class="text-center mb-5">Confirmation</h2>
    <div class="row">
      <div class="offset-md-2 col-md-8">
        <form action="mailto.php" method="post">
          <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>お名前</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>お問い合わせ内容</td>
                    <td><?php echo $message; ?></td>
                </tr>
            </tbody>
          </table>
          <input type="hidden" name="name" value="<?= $name ?>">
          <input type="hidden" name="message" value="<?= $message ?>">
          <input type="hidden" name="email" value="<?= $email ?>">
          <input type="submit" value="送信" class="btn btn-light btn-block btn-lg">
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
