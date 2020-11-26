<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <div class="container">
        <div class="heading">
            <center>
                <h2>Pilih 1 role dibawah ini</h2>
            </center>
        </div>
        <br>

        <div class="hr">

            <br><br>
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <td>
                            <a href="/Customer" type="button" class="btn btn-primary btn-lg btn-block">Customer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('/Chef/')); ?>" type="button" class="btn btn-primary btn-lg btn-block">Chef</button>
                        </td>
                    </tr>
                    </tr>
                        <td>
                            <a  href="/Cashier" type="button" class="btn btn-primary btn-lg btn-block">Kasir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('/Waiters/')); ?>" type="button" class="btn btn-primary btn-lg btn-block">Waiters</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('/HR/')); ?>" type="button" class="btn btn-primary btn-lg btn-block">HR</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chris\PBBO\resources\views/index.blade.php ENDPATH**/ ?>