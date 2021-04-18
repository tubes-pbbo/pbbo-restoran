@extends('app')
@section('content')

<div class="row">
    <div class="container">
        <h2 class="text-center">{{ $menu->name }}</h2>
        <p> Ingredients </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Ingredients</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recipes as $recipe)
                <tr>
                    <td>
                        <img src="https://spoonacular.com/cdn/ingredients_100x100/{{$recipe['image']}}" alt="">
                    </td>
                    <td>
                        {{$recipe['original']}} {{$recipe['name']}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <h5 class="card-title">Instruction</h5>
            {{$instruction}}
        </div>
    </div>

</div>
@endsection
