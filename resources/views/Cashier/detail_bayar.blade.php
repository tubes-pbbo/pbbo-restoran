@extends('Cashier.app')

@section('content')

<div style="display: none">
    {{ $total = 0 }}
</div>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Meja {{ $table->tableName }}</h2>
            </center>
        </div>
        <br>

        @foreach($orders as $order)
            @if($order->stat == 0)
                @if($order->payment->statusPayment == 0 and $order->payment->paymenttype == 1)
                <div style="display: none">
                    {{ $sum = 0 }}
                </div>

                <div class="cart">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col"> Harga per Porsi</th>
                                <th scope="col"> Subtotal</th>
                            </tr>
                                    @foreach ($order->menuorder as $menuorder)
                                    <tr>
                                        <td scope="row">
                                            {{$menuorder->menu->name}}
                                        </td>
                                        <td scope="row">
                                            {{$menuorder->qty}}
                                        </td>
                                        <td scope="row">
                                            Rp  {{$menuorder->menu->price}}
                                        </td>
                                        <td scope="row">
                                            Rp  {{ $menuorder->qty *  $menuorder->menu->price }}
                                            <div style="display: none">
                                                {{ $sum += $menuorder->qty *  $menuorder->menu->price }}
                                            </div>
                                        </td>
                                    </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right" scope="row">
                                    <p>Subtotal  :  Rp {{$sum}}</p>
                                    <p>PPN x 10% :  Rp {{$sum * 0.1}}</p>
                                    <strong>TOTAL     : Rp {{$sum*0.1 + $sum}} </strong>
                                    <div style="display: none">
                                        {{$total = $sum*0.1 + $sum}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <center>
                        <a type='button' class="btn btn-success btn-lg" data-toggle="modal" data-target="#staticBackdrop">Bayar</a>
                        <a href="index.php" type='button' class="btn btn-danger btn-lg">Batalkan</a>
                    </center>
                </div>

                <!-- Modal -->

                <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Total: {{$total}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table" border=0>
                                        <tr>
                                            <td colspan="3">
                                                <center>Jumlah Uang yang Diterima </center>
                                            </td>
                                            <td> </td>
                                            <td></td>
                                        </tr>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="m-3 border " style="width: 8rem; height: 2rem">
                                                    <p id="getVal"></p>
                                                </div>
                                                <div id="hide" style="display: none">
                                                    <button class="btn btn-danger" onclick="myFunction(0)"> Clear </button>
                                                </div>
                                            </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(100)">Rp 100 </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(500)">Rp 500 </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(1000)">Rp 1.000 </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(5000)">Rp 5.000 </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(10000)">Rp 10.000 </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(20000)">Rp 20.000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(50000)">Rp 50.000 </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(100000)">Rp 100.000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(200000)">Rp 200.000 </td>
                                            <td type='button' class="btn btn-primary btn-lg col-md-5 m-2" onclick="myFunction(1000000)">Rp 1.000.000 </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p> Kembalian : <strong id="kembali"></strong></p>
                                <center>
                                    <a id="myBtn" type="button"  href="/CashierPayment/{{$table->tableId}}/{{Auth::user()->employeeID}}/{{$order->payment->paymentID}}" class="btn btn-primary disabled">Selesai</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="cart mt-5">
                    <table class="table table-striped">
                        <tbody>
                            <p> Status Makanan , orderID : {{ $order->orderID}} </p>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col"> Status </th>
                            </tr>
                            @foreach ($order->menuorder as $menuorder)
                            <tr>
                                <td scope="row">
                                    {{$menuorder->menu->name}}
                                </td>
                                <td scope="row">
                                    {{$menuorder->qty}}
                                </td>
                                <td scope="row">
                                    @if ($menuorder->stat != null)
                                        {{$menuorder->statusPemesanan->statusName}}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            @endif
        @endforeach


    </div>
</div>

</div>
<script>
    $total = "<?php echo $total ?>"
    $receive = 0;
    $return = 0;
    function myFunction(value) {
        if(value == 0) {
            clear();
        }else{
            sum(value);
        }

    }

    function sum(value){
        $receive += value;
        $return = $receive - $total;
        document.getElementById("getVal").innerHTML = $receive;
        document.getElementById('hide').style.display = 'block';
        document.getElementById("kembali").innerHTML = $return;
        if ($return >= 0 ){
            $('#myBtn').removeClass('disabled');
        }else{
            $('#myBtn').addClass('disabled');
        }
    }

    function clear() {
        $receive = 0;
        $return = $receive - $total;
        document.getElementById("getVal").innerHTML = $receive;
        document.getElementById('hide').style.display = 'none';
        document.getElementById("kembali").innerHTML = $return;

    }

</script>

@endsection
