<?php $__env->startSection('content'); ?>

<div style="display: none">
    <?php echo e($gopay = 0); ?>

    <?php echo e($cash = 0); ?>



<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($order->paymenttype == 2): ?>
        <?php echo e($gopay += $order->amount); ?>

    <?php else: ?>
        <?php echo e($cash += $order->amount); ?>

    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>History Pembayaran</h2>
            </center>
        </div>
        <br>

        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">
                            <center> Total </center>
                        </th>
                    </tr>

                    <tr>
                        <td>
                            <center><strong> <?php echo e($gopay + $cash); ?> </strong></center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="table">
            <tr>
                <th scope="col">Transaksi</th>
                <td> <?php echo e($orders->count()); ?></td>
            </tr>
            <tr>
                <th scope="col">Gopay</th>
                <td> <?php echo e($gopay); ?> </td>
            </tr>
            <tr>
                <th scope="col">Cash</th>
                <td> <?php echo e($cash); ?></td>
            </tr>
        </table>
        <br>
        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Table No</th>
                        <th scope="col">Order No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Status</th>
                    </tr>

                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($order->orderDate); ?>

                        </td>
                        <td scope="row">
                            <?php echo e($order->tableID); ?>

                        </td>
                        <td scope="row">
                            <a href="/CashierOrderDetail/<?php echo e($order->orderID); ?>"><?php echo e($order->orderID); ?></a>
                        </td>
                        <td scope="row">
                            <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p> <?php echo e($menu->qty); ?>x  <?php echo e($menu->menu->name); ?> </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td scope="row">
                            <?php if($order->stat == 1): ?>
                                Sudah selesai
                            <?php else: ?>
                                Belum selesai
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>


        </div>


    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Cashier.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/Cashier/history.blade.php ENDPATH**/ ?>