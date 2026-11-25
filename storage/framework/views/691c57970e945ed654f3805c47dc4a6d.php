<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('titulo', 'Cafetería'); ?> · Cafetería del instituto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,560;9..144,650&family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/cafeteria.css')); ?>">
</head>

<body>
    <header class="barra">
        <a class="marca" href="<?php echo e(url('/')); ?>">
            <strong>Cafetería</strong>
            <span>del instituto</span>
        </a>
        <nav class="menu">
            <a href="<?php echo e(url('/')); ?>">Inicio</a>
            <a href="<?php echo e(url('/carta')); ?>">Carta</a>
            <a href="<?php echo e(url('/horario')); ?>">Horario</a>
            <a href="<?php echo e(url('/pedido')); ?>">Pedido</a>
        </nav>
    </header>

    <main class="pagina">
        <?php echo $__env->yieldContent('contenido'); ?>
    </main>

    <footer class="pie">
        <strong>Cafetería del instituto</strong> · Balmaseda · se sirve por la mañana
    </footer>
</body>

</html>
<?php /**PATH C:\cafeteria\resources\views/layouts/app.blade.php ENDPATH**/ ?>