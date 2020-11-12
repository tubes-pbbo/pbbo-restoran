<?php
  session_start();
?>
<?php

if(isset($_POST['login'])){
  $id= $_POST['ID'];
  $password = ($_POST['pass']);
  $con = mysqli_connect('localhost','root', '','db_restoran');
  if($con){
    $sql = "SELECT * FROM employee";
    $sqlRun = mysqli_query($con,$sql);
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
      header("Location: index.php");
      mysqli_close($con);
      exit();
    }else{
      $message = "Email or Password is incorrect";
    }
    mysqli_close($con);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <title>Home</title>
  </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" >Restaurant OKE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="AllTable.blade.php">See All Tables</a>
          </li>
          
        </ul>
        <span class="navbar-text" >
          
        </span>
      </div>
    </nav>
    <style>
          footer {
              background-color: #383943;
              color: #ffffff;
              text-align: center;
          }
          .footer1 {
              padding-top: 25px;
              padding-bottom: 25px;
          }
          .kotak-kosong{
            width:110px; 
            height:110px; 
            color:RGB(105, 94, 94);
            font-size:50px;
            margin:50px; 
            box-sizing:border-box;
            border:5px solid #ddd;
          }
          .kotak-penuh{
            width:110px; 
            height:110px; 
            color:RGB(105, 94, 94);
            font-size:50px; 
            margin:50px;
            box-sizing:border-box;
            border:5px solid RGB(255,0,0);
          }
    </style>
  <body>
    <div class="heading">
      <center><h2>Orderan Meja:</h2></center>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama Makanan</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mie Ayam</td>
          <td>1</td>
          <td>Sudah diantar</td>
        </tr>
        <tr>
          <td>Nasi Goreng</td>
          <td>1</td>
          <td>Sudah Diantar</td>
        </tr>
        <tr>
          <td>Es Teh Manis</td>
          <td>2</td>
          <td>Belum Diantar</td>
        </tr>
      </tbody>
    </table>
      
    
  </body>
  <footer>
      <div class="footer1">
        <p style="margin-bottom: -5px">Restaurant OKE</p>
        <p style="margin-top: -5px">Jalan Apa Aja Yang Penting Oke</p>
      </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>