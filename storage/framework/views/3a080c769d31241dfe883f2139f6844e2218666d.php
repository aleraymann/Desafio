<?php /* C:\Users\Alessandro\Documents\laravel\Desafio2\resources\views/components/errors_required.blade.php */ ?>
<?php if($errors->any()): ?>
<div class="card-footer">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e($i); ?>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>