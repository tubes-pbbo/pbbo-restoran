<?php session_start();?>
<?php

if(isset($_POST['login'])){
  $id= $_POST['ID'];
  $password = ($_POST['pass']);
  $serverCek = mysqli_connect('localhost','root', '','db_restoran');
  if($serverCek){
    $sql = "SELECT * FROM employee";
    $sqlRun = mysqli_query($serverCek,$sql);
    $isfound = false;
    while(!$isfound and $row = mysqli_fetch_assoc($sqlRun)){
      if($row['ID'] == $id && $row['pass'] == $password){
        $isfound = true;
        $_SESSION['login'] = true;
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['nama'] = $row['nama'] ;
        $_SESSION['pass'] = $row['pass'] ;
      }
    }

    if($isfound){
      header("Location: index.blade.php");
      mysqli_close($serverCek);
      exit();
    }else{
      $message = "Email or Password is incorrect";
    }
    mysqli_close($serverCek);
  }
}
?>

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

            if (isset($_SESSION['login'])) {
              echo "<li class='nav-item'>";
              echo $_SESSION['ID'];
              echo "</li>";


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


  <div class="wrapper">
    <div class="container">
      <div class="heading">
        <h2>Login</h2>
      </div>
      <form action="login.blade.php" method="post">
        <table>
          <tr>
            <td>ID : </td>
            <td><input type="ID" name="ID" required /></td>
          </tr>
          <tr>
            <td>Password : </td>
            <td><input type="password" name="pass" required /></td>
          </tr>
        </table>
        <?php
        if(isset($message)){
          echo '<br>'. $message;
        }
        ?>
        <br>
        <input type="submit" class="btn btn-primary" name="login" value="Login" />

      </form>
    </div>
  </div>


</body>
</html>
