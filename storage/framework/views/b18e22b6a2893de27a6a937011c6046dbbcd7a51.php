<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Restaurant OKE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/home/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" href="" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Menu">Semua Menu</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Lunch">Lunch</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Dinner">Dinner</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Dishes">Dishes</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Main Dishes">Main Dishes</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Breakfast">Breakfast</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Snack">Snack</a>
                  <a class="dropdown-item" href="/Menu/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/Dessert">Dessert</a>
                </div>
            </li>

        </ul>
        <span class="navbar-text">
            <a class="nav-link" href="/Cart/<?php echo e($mejas->tableId); ?>/<?php echo e($order); ?>/<?php echo e($query); ?>" ><svg style="margin: -5px 5px 0 0;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>

            Meja <?php echo e($mejas->tableName); ?>

            </a>
        </span>
    </div>
</nav>
<?php /**PATH C:\Users\chris\PBBO\resources\views/navigation.blade.php ENDPATH**/ ?>