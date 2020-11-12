<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Home</title>
</head>
  <style>
      footer {
        background-color: #383943;
        color: #ffffff;
        text-align: center;
      }
      .footer1 {
        padding-top: 25px;
        padding-bottom: 25px;
      }
  </style>
<body>
  <img src="https://www.singleplatform.com/wp-content/uploads/2018/12/5-Tips-for-Improving-Restaurant-Ambiance.jpg" width="100%" height="200px">
  <center style="margin-top: 30px">Makanan Favorit</center>
  <div class="card-deck" style="padding: 10px; margin: 10px 225px 50px 225px;">
  <?php $__currentLoopData = $array1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
      <img src="<?php echo e($array['image']); ?>" class="card-img-top" alt="<?php echo e($array['title']); ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($array['title']); ?></h5>
      </div>
      <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($array['id'] == $menu['menuId']): ?>
          <center style="margin: -30px 0px 0px 0px"><?php echo e($menu['price']); ?></center>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <form action="/cart" method="POST">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" id="makanan" name="makanan" value="<?php echo e($array['title']); ?>">
        <center><button type="button" class="btn btn-primary btn-sm" style="margin: 2px 2px 2px 2px">Masukkan ke keranjang</button></center>
      </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <center style="margin-top: 30px">Makanan Termurah</center>
  <div class="card-deck" style="padding: 10px; margin: 10px 225px 50px 225px;">
  <?php $__currentLoopData = $array2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $array): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
      <img src="<?php echo e($array['image']); ?>" class="card-img-top" alt="<?php echo e($array['title']); ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($array['title']); ?></h5>
      </div>
      <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($array['id'] == $menu['menuId']): ?>
          <center style="margin: -30px 0px 0px 0px"><?php echo e($menu['price']); ?></center>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <form action="/cart" method="POST">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" id="makanan" name="makanan" value="<?php echo e($array['title']); ?>">
        <center><button type="button" class="btn btn-primary btn-sm" style="margin: 2px 2px 2px 2px">Masukkan ke keranjang</button></center>
      </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\FeraniSyantik\pbbo\resources\views/home.blade.php ENDPATH**/ ?>