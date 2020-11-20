@extends('Customer/navigation')
@extends('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
      <form action="/cart" method="POST">
        {{ csrf_field() }}
        <input type="hidden" id="makanan" name="makanan" value="{{ $array['title'] }}">
        <center><button type="button" class="btn btn-primary btn-sm" style="margin: 2px 2px 2px 2px">Masukkan ke keranjang</button></center>
      </form>
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
      <form action="/cart" method="POST">
        {{ csrf_field() }}
        <input type="hidden" id="makanan" name="makanan" value="{{ $array['title'] }}">
        <center><button type="button" class="btn btn-primary btn-sm" style="margin: 2px 2px 2px 2px">Masukkan ke keranjang</button></center>
      </form>
    </div>
    @endforeach
  </div>
  
</body>
  <!--jquery-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="text/javascript">
      $(document).ready(function(){
            $("div ul li a").click(function(){
              $("div li a").removeClass('active');
              $(this).addClass('active');
          });
      });
  </script>
</html>