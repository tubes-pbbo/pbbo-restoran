<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col">
        <h2 class= "text-center mb-5"> Choose Table </h2>
        <div class="row">
            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-sm-3">
                    <?php if( $table->statusMeja == 0 ): ?>
                        <a class="btn btn-secondary btn-lg btn-block p-5" href="/WaitersTable/<?php echo e($table->tableId); ?>" > <?php echo e($table->tableName); ?></a>
                    <?php else: ?>
                        <a class="btn btn-danger btn-lg btn-block p-5"  href="/WaitersTable/<?php echo e($table->tableId); ?>" > <?php echo e($table->tableName); ?></a>
                    <?php endif; ?>
                </div>
                <div class="w-1-0"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="col-6 col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ready Order</h5>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Table</th>
                            <th scope="col">Order Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $table->order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($order->stat == 0): ?>
                                    <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($menu->stat == 2): ?>
                                        <tr>
                                            <td>
                                                <?php echo e($table->tableName); ?>

                                            </td>
                                            <td>
                                                <?php echo e($menu->qty); ?>x  <?php echo e($menu->menu->name); ?>

                                            </td>
                                            <td>
                                                <a href="/WaitersOrder/<?php echo e($order->orderID); ?>/<?php echo e($menu->ID); ?>" class="btn btn-primary">Done</a>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Waiter.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/Waiter/waiter.blade.php ENDPATH**/ ?>