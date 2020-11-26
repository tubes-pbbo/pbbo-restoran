<?php $__env->startSection('content'); ?>

<form action="/editEmployee/<?php echo e($employee->employeeID); ?>/edit" method="POST">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>


    <div class="row">
        <div class="col-sm-12 py-2">
            <h5>Edit <?php echo e($employee->employeeID); ?></h5>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeeName</span>
            </div>
            <input type="text" name="name" aria-label="name" class="form-control" value="<?php echo e($employee->name); ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeType</span>
            </div>
            <select id="employeetype" name="employeetype" class="form-control">
                <?php $__currentLoopData = $employeetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($em->employeetype); ?>">
                    <?php echo e($em->employeetype); ?> - <?php echo e($em->employeename); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="text"  name="password" aria-label="password" class="form-control">
        </div>



    </div>
    <div class="row">
        <div class="col-sm-12 py-2">
            <center>
                <button class="btn btn-primary" type="submit">Post</button>
            </center>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('HR/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/HR/edit.blade.php ENDPATH**/ ?>