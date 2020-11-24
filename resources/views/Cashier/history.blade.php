@extends('Cashier.app')

@section('content')

<div style="display: none">
    {{ $gopay = 0 }}
    {{ $cash = 0 }}


@foreach($orders as $order)
    @if($order->paymenttype == 2)
        {{$gopay += $order->amount}}
    @else
        {{$cash += $order->amount}}
    @endif
@endforeach

</div>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>History Pembayaran</h2>
            </center>
        </div>
        <br>

        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">
                            <center> Total </center>
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <center><strong> {{ $gopay + $cash }} </strong></center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="table">
            <tr>
                <th scope="col">Transaksi</th>
                <td> {{ $orders->count() }}</td>
            </tr>
            <tr>
                <th scope="col">Gopay</th>
                <td> {{ $gopay }} </td>
            </tr>
            <tr>
                <th scope="col">Cash</th>
                <td> {{ $cash }}</td>
            </tr>
        </table>
        <br>
        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Table No</th>
                        <th scope="col">Order No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Status</th>
                    </tr>

                    @foreach($orders as $order)
                    <tr>
                        <td>
                            {{ $order->orderDate }}
                        </td>
                        <td scope="row">
                            {{ $order->tableID }}
                        </td>
                        <td scope="row">
                            <a href="/CashierOrderDetail/{{ $order->orderID }}">{{ $order->orderID }}</a>
                        </td>
                        <td scope="row">
                            @foreach($order->menuorder as $menu)
                                <p> {{$menu->qty}}x  {{ $menu->menu->name }} </p>
                            @endforeach
                        </td>
                        <td scope="row">
                            @if($order->stat == 1)
                                Sudah selesai
                            @else
                                Belum selesai
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>


    </div>
</div>


@endsection
