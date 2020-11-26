<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container">
      <div class="heading">
        <center><h2>Daftar Employee</h2></center>
      </div>
      <br>

      <div class="hr">
        <a class="btn btn-secondary" href="/createEmployee/create">Create new employee</a>
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

            <?php if(count($employees) == 0): ?>
                <tr>
                    <td colspan="5" style="text-align: center"> Tidak ada data</td>
                </tr>
            <?php endif; ?>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($em->employeeID); ?>

                    </td>
                    <td>
                        <?php echo e($em->name); ?>

                    </td>
                    <td>
                        <?php echo e($em->birthdate); ?>

                    </td>
                    <td>
                        <?php if($em->employeeType == 1): ?>
                            Cashier
                        <?php elseif($em->employeeType == 2): ?>
                            Waiter
                        <?php else: ?>
                            Chef
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="/editEmployee/<?php echo e($em->employeeID); ?>" method="GET">Edit</a>
                    </td>
                    <td>
                        <form action="/deleteEmployee/<?php echo e($em->employeeID); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>


                        <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

      </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('HR/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/HR/hr.blade.php ENDPATH**/ ?>