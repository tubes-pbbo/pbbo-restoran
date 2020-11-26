<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="container">
        <h2 class="text-center"><?php echo e($menu->name); ?></h2>
        <p> Ingredients </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Ingredients</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="https://spoonacular.com/cdn/ingredients_100x100/<?php echo e($recipe['image']); ?>" alt="">
                    </td>
                    <td>
                        <?php echo e($recipe['original']); ?> <?php echo e($recipe['name']); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <h5 class="card-title">Instruction</h5>
            <?php echo e($instruction); ?>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/Chef/recipe.blade.php ENDPATH**/ ?>