@extends('Customer.footer')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>Payment</title>
</head>
<style>
    .bill {
        padding: 20px 0 20px 0;
    }
    .underline {
        margin-top: -30px;
        width: 700px;
        border-bottom: 2px solid rgb(255, 255, 255);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <a href="/Cart/{{$order->orderID}}/bill" class="navbar-nav mr-auto white"><svg width="3em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-compact-left" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
            </svg></a>

            <span class="navbar-text">
                <a class="nav-link" href="/Cart/{{$order->orderID}}/bill"><svg style="margin: -5px 5px 0 0;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>

                    Meja {{$order->table->tableName}}
                </a>
            </span>
        </div>
    </nav>
    <div class="bg-dark bill">
    <p style="text-align: center;color: white;font-size: 30px;">Total Harga</p>
    <p style="font-size: 70px;color: white;text-align: center;margin-top: -30px">Rp {{number_format($order->amount, 0, ".", ".")}}</p>
    <center><div class="underline"></div></center>
    </div>
    <br><br><br>
    <p style="font-size: 70px;color: rgb(0, 0, 0);text-align: center;margin-top: -12px">Payment Method</h2>
    <center><a href="/Payment/{{$order->orderID}}/1"><button style="background-color: #1A3E9A; margin-bottom: 10px; padding: 10px 192px 10px 192px;" type="button" class="btn btn-primary button1">Cash</button></a></center>
    <center><a href="/Payment/{{$order->orderID}}/2"><button style="background-color: #1A8B9A; margin-bottom: 30px; padding: 10px 192px 10px 192px;" type="button" class="btn btn-primary button1">Gopay</button></a></center>

</body>

</html>
