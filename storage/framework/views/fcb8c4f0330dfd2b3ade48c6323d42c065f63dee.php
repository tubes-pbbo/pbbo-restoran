<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Menu - Semua Menu</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>

    <?php $counter = 1 ?>
    <center style="margin-top: 20px">
      <?php if($name == 'Menu'): ?>
        Semua Menu
      <?php else: ?>
        Menu <?php echo e($name); ?>

      <?php endif; ?>
    </center>
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($counter%4 == 1): ?>
            <div class="card-deck" style="padding: 10px; margin: 10px 225px 0px 225px;">
        <?php endif; ?>
        <div class="card">
            <img src="<?php echo e($menu['image']); ?>" class="card-img-top" alt="<?php echo e($menu['title']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($menu['title']); ?></h5>
            </div>
            <center style="margin: -30px 0px 0px 0px">Rp 5000</center>
            <center><a href="/Cartitem/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/<?php echo e($menu['id']); ?>/<?php echo e($menu['title']); ?>">
            <a href="/Cartitem/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Menu/<?php echo e($menu['id']); ?>">
                <button type="button" class="btn btn-primary btn-sm" style="margin: 5px 0 15px 0">Masukkan ke keranjang</button></a></center>
        </div>
        <?php if($counter%4 == 0): ?>
        </div>
        <?php endif; ?>
    <?php $counter++ ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/menu.blade.php ENDPATH**/ ?>