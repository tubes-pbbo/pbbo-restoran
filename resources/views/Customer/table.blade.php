
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="heading">
                <center>
                    <h2 class="mt-5">Pilih 1 role dibawah ini</h2>
                </center>
            </div>
            <br>

            <div class="hr"></div>
            <table class="table table-striped">
            @foreach($tables as $table)
                <tr>
                    <td><a href="/{{ $table->tableId }}" class="btn btn-info btn-block"> {{ $table->tableName }}</a></td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</body>
