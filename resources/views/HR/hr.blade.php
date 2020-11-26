@extends('HR/app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="heading">
        <center><h2>Daftar Employee</h2></center>
      </div>
      <br>

      <div class="hr">
        <a class="btn btn-secondary" href="/createEmployee/create">Create new employee</a>
        <br><br>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="col">EmployeeID</th>
              <th scope="col">Employee Name</th>
              <th scope="col">Birthdate</th>
              <th scope="col">Employee Type</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>

            @if (count($employees) == 0)
                <tr>
                    <td colspan="5" style="text-align: center"> Tidak ada data</td>
                </tr>
            @endif
            @foreach ($employees as $em)
                <tr>
                    <td>
                        {{ $em->employeeID }}
                    </td>
                    <td>
                        {{ $em->name }}
                    </td>
                    <td>
                        {{ $em->birthdate }}
                    </td>
                    <td>
                        @if($em->employeeType == 1)
                            Cashier
                        @elseif($em->employeeType == 2)
                            Waiter
                        @else
                            Chef
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="/editEmployee/{{ $em->employeeID }}" method="GET">Edit</a>
                    </td>
                    <td>
                        <form action="/deleteEmployee/{{ $em->employeeID }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                        <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>

      </div>

@endsection
