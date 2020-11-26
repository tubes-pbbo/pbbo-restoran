

<?php $__env->startSection('content'); ?>
    
    <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">ID</span>
                </div>
                <input type="text" aria-label="ID" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Name</span>
                </div>
                <input type="text" aria-label="name" class="form-control">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Birthdate</span>
                </div>
                <input class="date form-control" type="text">
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">EmployeeType</span>
                </div>
                <select id="employeetype" name="employeetype" class="form-control">
                    <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($em->employeeType); ?>">
                        <?php $__currentLoopData = $employee->employeeType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($em->employeeType); ?> - <?php echo e($emt->employeename); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Password</span>
                </div>
                <input type="password" aria-label="pass" class="form-control">
              </div>

            </div>
            <div class="modal-footer">
                <center>
                    <a href="" type = 'button' class="btn btn-primary">Post </a>
                </center>
            </div>
          </div>
        </div>
    </div>
<?php echo $__env->make('HR/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\frans\PBBO\resources\views/HR/create.blade.php ENDPATH**/ ?>