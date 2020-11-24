@include('Customer.navigation')
@extends('Customer.footer')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Menu - Semua Menu</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <?php $counter = 1 ?>
    <center style="margin-top: 20px">
      @if($query == 'Menu')
        Semua Menu
      @else
        Menu {{ $query }}
      @endif
    </center>
    @foreach($menus as $menu)

        @if($counter%4 == 1)
            <div class="card-deck" style="padding: 10px; margin: 10px 225px 0px 225px;">
        @endif
        <div class="card">
            <img src="{{ $menu['image'] }}" class="card-img-top" alt="{{ $menu['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $menu['title'] }}</h5>
            </div>
            <center style="margin: -30px 0px 0px 0px">Rp 5000</center>
            <center><a href="/Cartitem/{{$order->orderID}}/{{$menu['id']}}/{{ $menu['title'] }}">
            <a href="/Cartitem/{{$order->orderID}}/Menu/{{ $menu['id'] }}">
                <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>
        </div>
        @if($counter%4 == 0)
            </div>
        @endif
        <?php $counter++ ?>
    @endforeach


</body>
  <!--jquery-->
  <script type="text/javascript">
      $(document).ready(function(){
            $("div ul li a").click(function(){
              $("div li a").removeClass('active');
              $(this).addClass('active');
          });
      });
  </script>
</html>
