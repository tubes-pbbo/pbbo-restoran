<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef Restoran Oke</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" charset="utf=8"></script>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand text-white">Restoran OKE</a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            @if (Auth::check())
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/CashierHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/CashierHistory">History Pembayaran</a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link disabled"> Cashier, {{ Auth::user()->name }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/logout" class="btn btn-primary"> Logout </a>
                    </li>
                </ul>
            @endif
        </div>
    </nav>
    <div class = "container" style="padding-top: 80px">
        @yield('content')
    </div>
</body>
</html>
