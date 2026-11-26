<?php $__env->startSection('titulo', 'Horario Diario'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Horario - <?php echo e($dia['dia']); ?></h1>
    <p><?php echo e($dia['frase']); ?></p>
    <ul>
        <?php $__currentLoopData = $trabajadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trabajador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($trabajador); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\cafeteria\resources\views/horario/view.blade.php ENDPATH**/ ?>