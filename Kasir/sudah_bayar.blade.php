<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restoran OKE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <a class="navbar-brand">Restoran OKE</a>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.blade.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.blade.php">History Pembayaran</a>
          </li>
          <li class="nav-item">
            <?php
            $con = mysqli_connect("localhost", "root", "", "db_restoran");
            if (mysqli_connect_errno()) {
              echo "Failed to connect to database : " . mysqli_connect_error();
            }
            session_start();
            if (isset($_SESSION['login'])) {
              ?>
              <li class='nav-item'>
                <a class='nav-link' href='#'><?php echo $_SESSION['ID'] ?></a>";
              </li>
              <?php
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='logout.php'>Log out</a>";
              echo "</li>";
            } else {
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='login.blade.php'>Log in</a>";
              echo "</li>";
            }
            ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php
  $con = mysqli_connect("localhost", "root", "", "db_restoran");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to database : " . mysqli_connect_error();
  }
  ?>





  <div class="wrapper">
    <div class="container">
      <div class="heading">
        <center><h2>Pilih Meja</h2></center>
      </div>
      <br>

      <div class="bayar">
        <?php
        // if(isset($_SESSION["shopping_cart"])){
        $total_price = 0;
        ?>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Jumlah</th>
              <th scope="col"> Status</th>
            </tr>
            <?php
            // foreach ($_SESSION["shopping_cart"] as $product){
            ?>
            <tr>
              <td>
                a
              </td>
              <td scope="row">
                b
              </td>
              <td scope="row">
                c
              </td>
            </tr>
          </tbody>
        </table>
        <?php
        // }} ?>

        <center>
          <a href="index.blade.php" type = 'button' class="btn btn-secondary btn-lg">Kembali ke Menu Utama</a>
        </center>
      </div>


  </div>

  <?php mysqli_close($con);?>


</div>

</div>
</body>
</html>