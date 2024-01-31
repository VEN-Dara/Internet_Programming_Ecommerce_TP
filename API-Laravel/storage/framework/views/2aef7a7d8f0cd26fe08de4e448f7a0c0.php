<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="display: flex;gap: 10px">
                <div><?php echo e($cat->id); ?></div>
                <div><?php echo e($cat->name); ?></div>
                <div><?php echo e($cat->created_at); ?></div>
                <div><?php echo e($cat->updated_at); ?></div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/showcat.blade.php ENDPATH**/ ?>