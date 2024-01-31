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
        <?php $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="display: flex;gap: 10px">
                <div><?php echo e($pro->id); ?></div>
                <div><?php echo e($pro->name); ?></div>
                <div><?php echo e($pro->category_id); ?></div>
                <div><?php echo e($pro->pricing); ?></div>
                <div><?php echo e($pro->description); ?></div>
                <div><?php echo e($pro->image); ?></div>
                <div><?php echo e($pro->created_at); ?></div>
                <div><?php echo e($pro->updated_at); ?></div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/showpro.blade.php ENDPATH**/ ?>