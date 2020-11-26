

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12 py-2">
        <h5">Edit</h5>
    </div>
    <div class="modal-body">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeeID</span>
            </div>
            <input type="text" aria-label="ID" class="form-control" value="<?php echo e($employee->employeeID); ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeeName</span>
            </div>
            <input type="text" aria-label="nama" class="form-control" value="<?php echo e($employee->name); ?>">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">EmployeeType</span>
            </div>
            <input type="text" aria-label="employeeType" class="form-control" value="<?php echo e($employee->employeeType); ?>">
        </div>

    </div>
     
    </div>
</div>
<div class="row">
    <div class="col-sm-12 py-2">
        <center>
            <a href="" type = 'button' class="btn btn-primary">Post </a>
        </center>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('HR/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\frans\PBBO\resources\views/HR/edit.blade.php ENDPATH**/ ?>