<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <!-- Basic page needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $__env->yieldContent('title'); ?> - Ezeelive Technologies Admin Panel</title>
        <!-- fevicon -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $__env->make('components.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </head>
	 <?php echo $__env->yieldContent('content'); ?>
</html>
	