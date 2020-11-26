
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="heading">
                <center>
                    <h2 class="mt-5">Pilih 1 role dibawah ini</h2>
                </center>
            </div>
            <br>

            <div class="hr"></div>
            <table class="table table-striped">
            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/<?php echo e($table->tableId); ?>" class="btn btn-info btn-block"> <?php echo e($table->tableName); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</body>
<?php /**PATH C:\Users\chris\PBBO\resources\views/Customer/table.blade.php ENDPATH**/ ?>