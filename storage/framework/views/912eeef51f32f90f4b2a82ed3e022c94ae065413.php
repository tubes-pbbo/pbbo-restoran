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

        <center><p class="bg-dark" style="color: white; height: 70px;padding-top: 20px">Meja <?php echo e($meja->tableName); ?></p></center>
    <center>
        <div class="accordion" id="accordionExample">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Order - <?php echo e($order->orderID); ?>

                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="" aria-labelledby="headingOne" data-parent="#accordionExample">
                    
                        <table class="table-borderless" width="1000px" style="margin : 20px 0 30px 0;height: 70%">
                            <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($item->menu->name); ?></th>
                                    <td>
                                        <?php echo e($item->qty); ?>

                                    </td>
                                    <td>
                                        <?php echo e($item->statusPemesanan->statusName); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </table>

                    
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </center>
</body>

<script>
    setTimeout(function() {
        location.reload();
    }, 2000);
</script>
</html>

<?php echo $__env->make('Customer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\frans\PBBO\resources\views/Customer/order.blade.php ENDPATH**/ ?>