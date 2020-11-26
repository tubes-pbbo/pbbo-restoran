

<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container">
      <div class="heading">
        <center><h2>Daftar Employee</h2></center>
      </div>
      <br>

      <div class="hr">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create new employee</button>
        <br><br>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th scope="col">EmployeeID</th>
              <th scope="col">Employee Name</th>
              <th scope="col">Birthdate</th>
              <th scope="col">Employee Type</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
            <tr>
              <td>
                <?php echo e($employee->employeeID); ?>

              </td>
              <td>
                <?php echo e($employee->name); ?>

              </td>
              <td>
                <?php echo e($employee->birthdate); ?>

              </td>
              <td>
                <?php if($employee->employeeType == 1): ?>
                    Cashier
                <?php elseif($employee->employeeType == 2): ?>
                    Waiter
                <?php else: ?>
                    Chef
                <?php endif; ?>
              </td>
              <td scope="row">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Edit</button>
              </td>
              <td scope="row">
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>

      </div>

      <!-- modal edit -->
      <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            
      </div>

      <!-- modal Create baru -->
      <div class="modal fade modal-dialog modal-dialog-centered modal-xl" id="create" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(HR.create, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make(HR.edit, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('HR/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\frans\PBBO\resources\views/Hr/hr.blade.php ENDPATH**/ ?>