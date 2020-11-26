<?php $__env->startSection('content'); ?>
<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Order List</h2>
            </center>
        </div>
        <br>

        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($table->statusMeja == 1): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo e($table->tableName); ?> </h5>
                    <div class="table-responsive">
                        <table class="table">
                            <?php $__currentLoopData = $table->order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuorder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($menuorder->stat == 1): ?>
                                        <tr>
                                            <td>
                                                <a href="/ChefRecipe/<?php echo e($menuorder->menu->menuId); ?>"> <?php echo e($menuorder->menu->name); ?> </a>
                                            </td>
                                            <td>
                                                <?php echo e($menuorder->qty); ?>

                                            </td>
                                            <td>
                                                <a href="/Chef/<?php echo e($menuorder->ID); ?>" class="btn btn-primary"> DONE </a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Chef.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/Chef/index.blade.php ENDPATH**/ ?>