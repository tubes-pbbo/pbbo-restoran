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
              <th scope="col"> Harga per Porsi</th>
              <th scope="col"> Subtotal</th>
            </tr>
            <?php
            // foreach ($_SESSION["shopping_cart"] as $product){
            ?>
            <tr>
              <td>
                <!-- echo "<div class='Nama_Buku'>" . $getBuku['Nama_Buku'] . "</div>"; -->
                a
              </td>
              <td scope="row">
                <!-- echo "<div class='Nama_Buku'>" . $getBuku['Nama_Buku'] . "</div>"; -->
                b
              </td>
              <td scope="row">
                <!-- echo "<div class='Nama_Buku'>" . $getBuku['Nama_Buku'] . "</div>"; -->
                c
              </td>
              <td scope="row">
                <!-- echo "<div class='Nama_Buku'>" . $getBuku['Nama_Buku'] . "</div>"; -->
                d
              </td>
            </tr>
            <tr>
              <td colspan="5" align="right" scope="row">
                <strong>TOTAL:</strong>
              </td>
            </tr>
          </tbody>
        </table>
        <?php
        // }} ?>

        <center>
          <a href="#" type = 'button' class="btn btn-success btn-lg" data-toggle="modal" data-target="#staticBackdrop">Bayar</a>
          <a href="index.php" type = 'button' class="btn btn-danger btn-lg">Batalkan</a>
        </center>
      </div>

      <!-- Modal -->
      <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Total:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="table-responsive">
                <table class="table" border=0>
                  <tr>
                    <td colspan="3"> <center>Jumlah Uang yang Diterima </center></td>
                    <td> </td>
                    <td></td>
                  </tr>

                </tr>
                <form name="uang">
                <tr>
                  <td>
                    <div class="input-group mb-3">
                      <input type="text" id="display" name="display" class="form-control">
                    </div>
                  </td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=100">Rp 100</button></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=500">Rp 500</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=1000">Rp 1.000</button></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=5000">Rp 5.000</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=10000">Rp 10.000</button></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=20000">Rp 20.000</button></td>
                </tr>
                <tr>
                  <td></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=50000">Rp 50.000</button></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=100000">Rp 100.000</button> </td>
                </tr>
                <tr>
                  <td></td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=200000">Rp 200.000</button> </td>
                  <td> <button type="button"  class="btn btn-primary btn-lg btn-block" onclick="uang.display.value +=1000000">Rp 1.000.000</button> </td>

                </tr>
              </form>

              </table>
            </div>
          </div>
          <div class="modal-footer">
            <center>
              <a href="sudah_bayar.blade.php" type = 'button' class="btn btn-primary">Selesai </a>
            </center>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php mysqli_close($con);?>


</div>

</div>
</body>
</html>
