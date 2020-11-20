<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restoran OKE</title>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="responsive.css">
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">History Pembayaran</a>
          </li>
          <li class="nav-item">
            <?php

            session_start();
            if (isset($_SESSION['login'])) {
              ?>
              <li class='nav-item'>
                <a class='nav-link' href='#'><?php echo $_SESSION['ID'] ?></a>";
              </li>
              <?php
              echo "<li class='nav-item'>";
              echo "<a class='nav-link' href='logout.blade.php'>Log out</a>";
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







  <div class="book-wrapper">
    <div class="container">
      <div class="heading">
        <center><h2>Pilih Meja</h2></center>
      </div>
      <br>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <td> <a href="{{ url('/Kasir/Payment/1') }}" type = 'button' class="btn btn-primary btn-lg btn-block">1</a></td>
            <td> <a href="{{ url('/Kasir/Payment/2') }}" type = 'button' class="btn btn-primary btn-lg btn-block">2</a></td>
            <td> <a href="{{ url('/Kasir/Payment/7') }}" type = 'button' class="btn btn-primary btn-lg btn-block">7</a> </td>
            <td> <a href="{{ url('/Kasir/Payment/8') }}"type = 'button' class="btn btn-primary btn-lg btn-block">8</a></td>
          </tr>
          <tr>
            <td> <a href="{{ url('/Kasir/Payment/3') }}" type = 'button' class="btn btn-primary btn-lg btn-block">3</a> </td>
            <td> <a href="{{ url('/Kasir/Payment/4') }}"type = 'button' class="btn btn-primary btn-lg btn-block">4</a></td>
            <td> <a href="{{ url('/Kasir/Payment/9') }}" type = 'button' class="btn btn-primary btn-lg btn-block">9</a></td>
            <td> <a href="{{ url('/Kasir/Payment/10') }}" type = 'button' class="btn btn-primary btn-lg btn-block">10</a></td>
          </tr>
          <tr>
            <td> <a href="{{ url('/Kasir/Payment/5') }}" type = 'button' class="btn btn-primary btn-lg btn-block">5</a> </td>
            <td> <a href="{{ url('/Kasir/Payment/6') }}" type = 'button' class="btn btn-primary btn-lg btn-block">6</a> </td>
            <td> <a href="{{ url('/Kasir/Payment/11') }}" type = 'button' class="btn btn-primary btn-lg btn-block">11</a></td>
            <td> <a href="{{ url('/Kasir/Payment/12') }}" type = 'button' class="btn btn-primary btn-lg btn-block">12</a> </td>
          </tr>

        </table>
      </div>
    </div>
  </div>
</body>
</html>
