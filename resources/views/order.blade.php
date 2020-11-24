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
    <center>
        <table class="table-borderless" width="1000px" style="margin : 20px 0 30px 0;height: 70%">
            <thead>
                <tr class="bg-success" style="text-align: center">
                    <th scope="col">Nama</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    @foreach ($menu->menuorder as $order)
                    <tr>
                        <th scope="row">{{$order->menu->name}}</th>
                        <td>
                            {{$order->qty}}
                        </td>
                        <td>
                            {{$order->status->statusName}}
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </center>
</body>

<script>
    setTimeout(function() {
        location.reload();
    }, 2000);
</script>
</html>
