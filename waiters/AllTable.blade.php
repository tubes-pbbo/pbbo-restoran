<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" >Restaurant OKE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="AllTable.blade.php">See All Tables</a>
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
              echo "<a class='nav-link' href='login.php'>Log in</a>";
              echo "</li>";
            }
            ?>
          </li>
        </ul>
      </div>
  </nav>
  
<body>
  
  
    <center style="margin-top: 30px; font-size: 24pt">LOKASI MEJA</center>
    <table class="table">
      
        <!-- <?php
        
          $sql = "SELECT * FROM customer WHERE statusCustomer=0";
          $result = mysqli_query($con, $sql);
          echo "<td>";
          while ($getTable = mysqli_fetch_array($result)){
            echo " <a href='viewOrderTable.blade.php' type = 'button' class='btn btn-primary btn-lg btn-block'>$getTable[0]</a>";
          }
          echo "</td>";
          $sql = "SELECT * FROM customer WHERE statusCustomer=1";
          $result = mysqli_query($con, $sql);
          while ($getTable = mysqli_fetch_array($result)){
            echo "<td> <a href='viewOrderTable.blade.php' type = 'button' class='btn btn-primary btn-lg btn-block' >$getTable[0]</a></td>";
          }
          
        ?> -->
      <tr>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">1</a></td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">2</a></td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">7</a> </td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">8</a></td>
      </tr>
      <tr>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">3</a> </td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">4</a></td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">9</a></td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">10</a></td>
      </tr>
      <tr>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">5</a> </td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">6</a> </td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">11</a></td>
        <td> <a href="viewOrderTable.blade.php" type = 'button' class="btn btn-primary btn-lg btn-block">12</a> </td>
      </tr>
      
    </table>
    <?php
      mysqli_close($con);
    ?>
  
</body>
<footer>
    
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>