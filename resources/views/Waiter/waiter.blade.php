@extends('Waiter.app')

@section('content')



<div class="row">
    <div class="col">
        <h2 class= "text-center mb-5"> Choose Table </h2>
        <div class="row">
            @foreach( $tables as $table )
                <div class="col-6 col-sm-3">
                    @if( $table->statusMeja == 0 )
                        <a class="btn btn-secondary btn-lg btn-block p-5" href="/WaitersTable/{{$table->tableId}}" > {{ $table->tableName }}</a>
                    @else
                        <a class="btn btn-danger btn-lg btn-block p-5"  href="/WaitersTable/{{$table->tableId}}" > {{ $table->tableName }}</a>
                    @endif
                </div>
                <div class="w-1-0"></div>
            @endforeach
        </div>
    </div>
    <div class="col-6 col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ready Order</h5>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Table</th>
                            <th scope="col">Order Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $tables as $table )
                            @foreach($table->order as $order)
                                @if($order->stat == 0)
                                    @foreach($order->menuorder as $menu)
                                        @if($menu->stat == 2)
                                        <tr>
                                            <td>
                                                {{ $table->tableName }}
                                            </td>
                                            <td>
                                                {{ $menu->qty}}x  {{ $menu->menu->name}}
                                            </td>
                                            <td>
                                                <a href="/WaitersOrder/{{$order->orderID}}/{{$menu->ID}}" class="btn btn-primary">Done</a>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
