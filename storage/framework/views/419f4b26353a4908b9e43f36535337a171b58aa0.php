<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <center>
        <table class="table-borderless" width="1000px" style="margin : 20px 0 30px 0;height: 70%">
            <thead>
                <tr class="bg-success" style="text-align: center">
                    <th scope="col">Nama</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $menu->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($order->menu->name); ?></th>
                        <td>
                            <?php echo e($order->qty); ?>

                        </td>
                        <td>
                            <?php echo e($order->status->statusName); ?>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </center>
</body>

<script>
    setTimeout(function() {
        location.reload();
    }, 2000);
</script>
</html>
<?php /**PATH C:\Users\chris\PBBO\resources\views/order.blade.php ENDPATH**/ ?>