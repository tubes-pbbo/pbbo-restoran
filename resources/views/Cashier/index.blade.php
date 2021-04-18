@extends('Cashier/app')

@section('content')

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Pilih Meja</h2>
            </center>
        </div>
        <br>
        @foreach ($tables as $table)
            <a class="btn btn-secondary btn-lg btn-block" href="/Cashier/{{ $table->tableId }}" method="GET">{{ $table->tableName}}</a>
        @endforeach
        {{-- <div class="table-responsive">
            <table class="table">
                <tr>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">1</a></td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">2</a></td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">7</a> </td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">8</a></td>
                </tr>
                <tr>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">3</a> </td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">4</a></td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">9</a></td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">10</a></td>
                </tr>
                <tr>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">5</a> </td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">6</a> </td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">11</a></td>
                    <td> <a href="detail_bayar.php" type='button' class="btn btn-primary btn-lg btn-block">12</a> </td>
                </tr>

            </table>
        </div> --}}

@endsection
