@extends('Chef/app')
@section('content')
<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Order List</h2>
            </center>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td colspan=3>
                                @foreach ($orders as $mkn)
                                    {{$mkn->orderID->tableID}}
                                @endforeach
                                </td>
                            </tr>
                            <!-- bandingin sama atau ngga dg yg di api -->

                            @foreach($array3 as $array)
                            @foreach ($orders as $mkn)
                            @if($array['id'] == $mkn->menuID)
                            <tr>
                                <td>{{ $array['id'] }} </td>
                                <td>{{ $array['title'] }} </td>
                                <td> {{ $mkn->qty}}</td>
                                <td> {{ $mkn->note}}</td>
                                <td><a href="#" type='button' class="btn btn-primary btn-lg btn-block">Done</a> </td>
                                
                            </tr>

                            @endif
                            
                            @endforeach
                            @endforeach
                        </table>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>
@endsection