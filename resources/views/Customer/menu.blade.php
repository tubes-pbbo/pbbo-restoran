@extends('Customer/navigation')
@extends('footer')

@section('content')
<center style="margin-top: 30px">Semua Makanan</center>
  @foreach($array3 as $array)
    <div class="card"  style="width: 300px; float:left">
      <img src="{{ $array['image'] }}" class="card-img-top" alt="{{ $array['title'] }}">
      <div class="card-body">
        <h5 class="card-title">{{ $array['title'] }}</h5>
      </div>
      @foreach($menus as $menu)
        @if($array['id'] == $menu['menuId'])
          <center style="margin: -30px 0px 0px 0px">{{ $menu['price'] }}</center>
        @endif
      @endforeach
      <form action="/cart" method="POST">
        {{ csrf_field() }}
        <input type="hidden" id="makanan" name="makanan" value="{{ $array['title'] }}">
        <center><button type="button" class="btn btn-primary btn-sm" style="margin: 2px 2px 2px 2px">Masukkan ke keranjang</button></center>
      </form>
    </div>
    @endforeach

