<?php $__env->startSection('titulo', 'carta'); ?>

<?php $__env->startSection('contenido'); ?>

<h1>Carta</h1>
<ul>
<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li> <a href="<?php echo e(route('vista_producto', ['codigo' => $producto['codigo'] ])); ?>"> <!-- Llamo al generador de rutas-->
        <?php echo e($producto['codigo']); ?>

        -<?php echo e($producto['nombre']); ?>

        -<?php echo e(number_format($producto['precio'], 2, ",", "")); ?> €
        </a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\cafeteria\resources\views/carta/index.blade.php ENDPATH**/ ?>