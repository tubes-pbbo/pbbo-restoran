<?php $__env->startSection('content'); ?>

<div class="book-wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Pilih Meja</h2>
            </center>
        </div>
        <br>
        <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="btn btn-secondary btn-lg btn-block" href="/Cashier/<?php echo e($table->tableId); ?>" method="GET"><?php echo e($table->tableName); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Cashier/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/cashier/index.blade.php ENDPATH**/ ?>