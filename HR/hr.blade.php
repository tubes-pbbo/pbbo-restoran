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
        <center><h2>Daftar Employee</h2></center>
      </div>
      <br>

      <div class="hr">
        <?php
        // if(isset($_SESSION["shopping_cart"])){
        // $total_price = 0;
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create new employee</button>
        <br><br>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="col">Nama Employee</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
            <?php
            // foreach ($_SESSION["shopping_cart"] as $product){
            ?>
            <tr>
              <td>
                a
              </td>
              <td scope="row">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Edit</button>
              </td>
              <td scope="row">
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
        <?php
        // }} ?>


      </div>
      <!-- modal edit -->
      <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">ID</span>
                </div>
                <input type="text" aria-label="ID" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nama</span>
                </div>
                <input type="text" aria-label="nama" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Jabatan</span>
                </div>
                <input type="text" aria-label="jabatan" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nomor Telepon</span>
                </div>
                <input type="text" aria-label="noTlp" class="form-control">
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

      <!-- modal Create baru -->
      <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">ID</span>
                </div>
                <input type="text" aria-label="ID" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nama</span>
                </div>
                <input type="text" aria-label="nama" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Jabatan</span>
                </div>
                <input type="text" aria-label="jabatan" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Nomor Telepon</span>
                </div>
                <input type="text" aria-label="noTlp" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Password</span>
                </div>
                <input type="password" aria-label="pass" class="form-control">
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

      <?php mysqli_close($con);?>


    </div>

  </div>
</body>
</html>
