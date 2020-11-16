@extends('HR/app')

@section('content')

<form action="/editEmployee/{{ $employee->employeeID }}/edit" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="row">
        <div class="col-sm-12 py-2">
            <h5>Edit {{ $employee->employeeID }}</h5>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeeName</span>
            </div>
            <input type="text" name="name" aria-label="name" class="form-control" value="{{$employee->name}}">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeType</span>
            </div>
            <select id="employeetype" name="employeetype" class="form-control">
                @foreach ($employeetype as $em)
                <option value="{{ $em->employeetype }}">
                    {{ $em->employeetype }} - {{ $em->employeename }}
                </option>
                @endforeach
            </select>
        </div>


        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="text"  name="password" aria-label="password" class="form-control">
        </div>



    </div>
    <div class="row">
        <div class="col-sm-12 py-2">
            <center>
                <button class="btn btn-primary" type="submit">Post</button>
            </center>
        </div>
    </div>
</div>

@endsection
