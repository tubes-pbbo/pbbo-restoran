
@extends('app')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Pilih 1 role dibawah ini</h2>
            </center>
        </div>
        <br>

        <div class="hr">

            <br><br>
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <td>
                            <a href="/Customer" type="button" class="btn btn-primary btn-lg btn-block">Customer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/Chef/') }}" type="button" class="btn btn-primary btn-lg btn-block">Chef</button>
                        </td>
                    </tr>
                    </tr>
                        <td>
                            <a  href="/Cashier" type="button" class="btn btn-primary btn-lg btn-block">Kasir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/Waiters/') }}" type="button" class="btn btn-primary btn-lg btn-block">Waiters</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ url('/HR/') }}" type="button" class="btn btn-primary btn-lg btn-block">HR</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        @endsection
