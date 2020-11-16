@extends('HR/app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
<div class="row">
    {{-- <div class="col-sm-12 py-2">
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
        <input class="date form-control" type="text" id="date">
    </div> --}}

    {{-- <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">EmployeeType</span>
        </div>
        <select id="employeetype" name="employeetype" class="form-control">
            @foreach ($employees as $em)
            <option value="{{ $em->employeeType }}">
    {{ $em->employeeType }} - {{ $em->employeeTypes->employeename }}
    </option>
    @endforeach
    </select>

</div> --}}


</div>
Date:
<input type="text" class="form-control datetimepicker" name="Appointment_time">
{{-- <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Password</span>
        </div>
        <input type="password" aria-label="pass" class="form-control">
    </div> --}}
<script type="text/javascript">
    $(function() {
        $('.datetimepicker').datetimepicker({
            format: 'mm-DD-yyyy'
        });
    });
</script>

@endsection
