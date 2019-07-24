<?php
include 'headereng.php';
?>

<section style="margin-top:100px;">
  <div class="container">
    <h2 class="text-center mb-5">Confirmation</h2>
    <div class="row">
      <div class="offset-md-2 col-md-8">
        <form action="mailtoeng.php" metod="post">
          <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>name</td>
                    <td><?php echo $_POST["name"]; ?></td>
                </tr>
                <tr>
                    <td>email address</td>
                    <td><?php echo $_POST["email"]; ?></td>
                </tr>
                <tr>
                    <td>message</td>
                    <td><?php echo $_POST["message"]; ?></td>
                </tr>
            </tbody>
          </table>
          <input type="submit" value="送信" class="btn btn-light btn-block btn-lg">
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include 'footereng.php';
?>
