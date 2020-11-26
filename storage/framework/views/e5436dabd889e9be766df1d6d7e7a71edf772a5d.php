<?php echo $__env->make('Customer.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Menu - Semua Menu</title>
    <script type="text/javascript" src="/js/app.js"></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<style>
    thead,
    tbody {
        margin: 0 -30px 0 -30px;
    }
</style>

<body>
    <?php if(count($order->menuorder) == 0): ?>
    <center>
        <h1 style="height: 70%">Tidak Ada Pesanan</h1>
    </center>
    <?php else: ?>
    <center>
        <table class="table-borderless" width="1000px" style="margin : 20px 0 30px 0;height: 70%">
            <thead>
                <tr class="bg-success" style="text-align: center">
                    <th scope="col">Delete</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0 ?>
                <?php $__currentLoopData = $order->menuorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/Cart/<?php echo e($order->orderID); ?>/<?php echo e($query); ?>/<?php echo e($menu->ID); ?>">Delete</a></td>
                    <th scope="row"><?php echo e($menu->menu->name); ?></th>
                    <td>Rp <?php echo e(number_format($menu->menu->price, 0, ".", ".")); ?></td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo e($menu->qty); ?>

                            </button>
                            <div class="dropdown-menu">
                                <?php for($i = 0;$i < 20;$i++): ?> <a class="dropdown-item" href="/Cart/<?php echo e($order->orderID); ?>/<?php echo e($query); ?>/<?php echo e($menu->ID); ?>/<?php echo e($i); ?>"><?php echo e($i); ?></a>
                                    <?php endfor; ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        Rp <?php echo e(number_format($menu->qty * $menu->menu->price, 0, ".", ".")); ?>

                    </td>
                    <?php $total += $menu->qty * $menu->menu->price ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>Subtotal</td>
                    <td>Rp <?php echo e(number_format($total, 0, ".", ".")); ?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>PPn x 10%</td>
                    <td>Rp.<?php echo e(number_format(0.1 * $total, 0, ".", ".")); ?></td>
                    <?php $total +=0.1 * $total ?>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>Total Bayar</td>
                    <td>Rp <?php echo e(number_format($total, 0, ".", ".")); ?></td>
                </tr>
            </tbody>
        </table>
    </center>


    <center><button style="background-color: #1A8B9A; padding: 10px 200px 10px 200px" type="button" class="btn btn-primary button1" data-toggle="modal" data-target="#exampleModal">Order</button><br></center>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah pesanan Anda Sudah benar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/Bill/<?php echo e($order->orderID); ?>/<?php echo e($total); ?>/cart"><button type="button" class="btn btn-primary">Save changes</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php if($urlback != 'bill'): ?>
        <center><a href="<?php echo e($urlback); ?>"><button style="background-color: #FF3A3A; margin-bottom: 10px; padding: 10px 192px 10px 192px;" type="button" class="btn btn-primary button1">kembali</button></a></center>
    <?php else: ?>
        <center><button style="background-color: #FF3A3A; margin-bottom: 10px; padding: 10px 192px 10px 192px;" type="button" class="btn btn-primary button1" data-toggle="modal" data-target="#exampleModal">kembali</button><br></center>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah pesanan Anda Sudah benar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/Bill/<?php echo e($order->orderID); ?>/cart/<?php echo e($total); ?>"><button type="button" class="btn btn-primary">Save changes</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</body>

</html>

<?php echo $__env->make('Customer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\frans\PBBO\resources\views/Customer/cartitem.blade.php ENDPATH**/ ?>