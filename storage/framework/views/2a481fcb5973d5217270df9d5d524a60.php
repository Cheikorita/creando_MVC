<?php $__env->startSection('titulo', 'carta'); ?>

<?php $__env->startSection('contenido'); ?>
    <h1>Horario</h1>
    <ul>
    <?php $__currentLoopData = $horario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <a href="<?php echo e(route('vista_horario_personal', ['dia' => $dia['dia'] ])); ?>"> <!-- Llamo al generador de rutas-->
            <?php echo e($dia["dia"]); ?>

            -<?php echo e($dia["frase"]); ?>

            </a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\cafeteria\resources\views/horario/index.blade.php ENDPATH**/ ?>