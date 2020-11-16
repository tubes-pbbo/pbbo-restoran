<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Restoran Oke</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand">Restoran OKE</a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History Pembayaran</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link"> Cashier, {{ Auth::user()->name }}</a>
                    </li>
                </ul>
        </div>
    </nav>
    <div class = "container" style="padding-top: 80px">
        @yield('content')
    </div>
</body>
</html>
