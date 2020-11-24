@extends('Customer.footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

        <center><p class="bg-dark" style="color: white; height: 70px;padding-top: 20px">Meja {{$meja->tableName}}</p></center>
    <center>
        <div class="accordion" id="accordionExample">
            @foreach($orders as $order)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Order - {{$order->orderID}}
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordionExample">
                    {{-- <div class="card-body"> --}}
                        <table class="table-borderless" width="1000px" style="margin : 20px 0 30px 0;height: 70%">
                            @foreach ($order->menuorder as $item)
                                <tr>
                                    <th scope="row">{{$item->menu->name}}</th>
                                    <td>
                                        {{$item->qty}}
                                    </td>
                                    <td>
                                        {{$item->statusPemesanan->statusName}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </table>

                    {{-- </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </center>
</body>

<script>
    setTimeout(function() {
        location.reload();
    }, 2000);
</script>
</html>
