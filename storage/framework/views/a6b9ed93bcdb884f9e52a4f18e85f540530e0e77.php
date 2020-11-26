<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <script type="text/javascript" src="/js/app.js"></script>
  <title>Home</title>
</head>

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
      <center><a href="/Cartitem/<?php echo e($mejas->tableId); ?>/<?php echo e($orders->orderID); ?>/home/<?php echo e($array['id']); ?>">
        <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>
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
      <center><a href="/Cartitem/<?php echo e($mejas->tableId); ?>/<?php echo e($orders->orderID); ?>/home/<?php echo e($array['id']); ?>">
        <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/home.blade.php ENDPATH**/ ?>