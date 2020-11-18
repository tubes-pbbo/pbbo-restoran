@extends('HR/app')

@section('content')

    <form name="formCreate" action="/createEmployee" method="POST">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-12 py-2">
                <h5>Create</h5>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID</span>
                </div>
                <input type="text" name="id" aria-label="ID" class="form-control">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                </div>
                <input type="text" name="name" aria-label="name" class="form-control">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Birthdate</span>
                </div>
                <div>
                    <input class="form-control" type="text" id="dt" name="birthdate" aria-label="birthdate">
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">EmployeeType</span>
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
                <input type="password" name="password" aria-label="password" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 py-2">
                <center>
                    <button class="btn btn-primary" type="submit">Post</button>
                </center>
            </div>
        </div>

    </form>


    <script>
        $(document).ready(function(){
            $('#dt').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>

    @endsection
