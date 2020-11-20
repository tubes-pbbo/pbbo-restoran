<!DOCTYPE html>
<html lang="en">

<head>
    <title> Restaurant Chef </title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
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
    <div class="container" style="padding-top: 80px">
        @yield('content')
    </div>

</body>

</html>