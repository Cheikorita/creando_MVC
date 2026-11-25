<?php $__env->startSection('titulo', 'producto'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Producto - <?php echo e($producto['nombre']); ?></h1>
    <ul>
        <li><?php echo e($producto['codigo']); ?> </li>
        <li><?php echo e($producto['nombre']); ?></li>
        <li><?php echo e(number_format($producto['precio'], 2, ",", "")); ?> €</li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\cafeteria\resources\views/carta/view.blade.php ENDPATH**/ ?>