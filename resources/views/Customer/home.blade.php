@include('Customer.navigation')
@extends('Customer.footer')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="text/javascript" src="/js/app.js"></script>
  <title>Home</title>
</head>

<body>
  <img src="https://www.singleplatform.com/wp-content/uploads/2018/12/5-Tips-for-Improving-Restaurant-Ambiance.jpg" width="100%" height="200px">
  <center style="margin-top: 30px">Makanan Favorit</center>
  <div class="card-deck" style="padding: 10px; margin: 10px 225px 50px 225px;">
    @foreach($array1 as $array)
    <div class="card">
      <img src="{{ $array['image'] }}" class="card-img-top" alt="{{ $array['title'] }}">
      <div class="card-body">
        <h5 class="card-title">{{ $array['title'] }}</h5>
      </div>
      @foreach($menus as $menu)
      @if($array['id'] == $menu['menuId'])
      <center style="margin: -30px 0px 0px 0px">{{ $menu['price'] }}</center>
      @endif
      @endforeach
      <center><a href="/Cartitem/{{$order->orderID}}/home/{{ $array['id'] }}">
        <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>
    </div>
    @endforeach
  </div>
  <center style="margin-top: 30px">Makanan Termurah</center>
  <div class="card-deck" style="padding: 10px; margin: 10px 225px 50px 225px;">
    @foreach($array2 as $array)
    <div class="card">
      <img src="{{ $array['image'] }}" class="card-img-top" alt="{{ $array['title'] }}">
      <div class="card-body">
        <h5 class="card-title">{{ $array['title'] }}</h5>
      </div>
      @foreach($menus as $menu)
      @if($array['id'] == $menu['menuId'])
      <center style="margin: -30px 0px 0px 0px">{{ $menu['price'] }}</center>
      @endif
      @endforeach
      <center><a href="/Cartitem/{{$order->orderID}}/home/{{ $array['id'] }}">
        <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>

    </div>
    @endforeach
  </div>

</body>
<!--jquery-->
<script type="text/javascript">
  $(document).ready(function() {
    $("div ul li a").click(function() {
      $("div li a").removeClass('active');
      $(this).addClass('active');
    });
  });
</script>

</html>
