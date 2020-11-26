@extends('Cashier.app')

@section('content')

<div style="display: none">
    {{ $subtotal = 0 }}
</div>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <h2 class="text-center mb-5"> Order {{ $order->orderID }} </h2>
        </div>
        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col"> Menu </th>
                        <th scope="col"> Qty </th>
                        <th scope="col"> Price </th>
                        <th scope="col"> Note </th>
                        <th scope="col"> Total </th>
                        <th scope="col"> Status </th>
                    </tr>
                    @foreach( $order->menuorder as $menuorder)
                    <tr>
                        <td scope="row">
                            {{$menuorder->menu->name}}
                        </td>
                        <td scope="row">
                            {{$menuorder->qty}}
                        </td>
                        <td scope="row">
                            {{$menuorder->menu->price}}
                        </td>
                        <td scope="row">
                            @if( $menuorder->note == null )
                                Empty
                            @else
                                {{$menuorder->note}}
                            @endif
                        </td>
                        <td scope="row">
                            Rp  {{  $subtotal += $menuorder->qty *  $menuorder->menu->price }}
                        </td>
                        <td>
                            @if($menuorder->stat != null)
                                {{ $menuorder->statusPemesanan->statusName }}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" align="right" scope="row">
                            <p> SubTotal : Rp {{ $subtotal }} </p>
                            <p> PPN 10% : Rp {{ $subtotal * 0.1 }} </p>
                            <p> Total : Rp {{ $order->amount }} </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
