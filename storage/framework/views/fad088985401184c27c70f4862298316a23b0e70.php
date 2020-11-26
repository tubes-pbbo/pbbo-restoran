<?php $__env->startSection('content'); ?>

<div style="display: none">
    <?php echo e($subtotal = 0); ?>

</div>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <h2 class="text-center mb-5"> Order <?php echo e($order->orderID); ?> </h2>
        </div>
        <div class="cart">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col"> Menu </th>
                        <th scope="col"> Qty </th>
                        <th scope="col"> Price </th>
                        <th scope="col"> Note </th>
                        <th scope="col"> Total </th>
                        <th scope="col"> Status </th>
                    </tr>
                    <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuorder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row">
                            <?php echo e($menuorder->menu->name); ?>

                        </td>
                        <td scope="row">
                            <?php echo e($menuorder->qty); ?>

                        </td>
                        <td scope="row">
                            <?php echo e($menuorder->menu->price); ?>

                        </td>
                        <td scope="row">
                            <?php if( $menuorder->note == null ): ?>
                                Empty
                            <?php else: ?>
                                <?php echo e($menuorder->note); ?>

                            <?php endif; ?>
                        </td>
                        <td scope="row">
                            Rp  <?php echo e($subtotal += $menuorder->qty *  $menuorder->menu->price); ?>

                        </td>
                        <td>
                            <?php if($menuorder->stat != null): ?>
                                <?php echo e($menuorder->statusPemesanan->statusName); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="6" align="right" scope="row">
                            <p> SubTotal : Rp <?php echo e($subtotal); ?> </p>
                            <p> PPN 10% : Rp <?php echo e($subtotal * 0.1); ?> </p>
                            <p> Total : Rp <?php echo e($order->amount); ?> </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Cashier.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/Cashier/orderDetail.blade.php ENDPATH**/ ?>