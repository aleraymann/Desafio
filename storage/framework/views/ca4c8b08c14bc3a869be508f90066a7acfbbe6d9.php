<?php /* C:\Users\Alessandro\Documents\laravel\Desafio2\resources\views/ProductViews/newProducts.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Products</title>
</head>

<body class="newprod">
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h3>New Product</h3>
                <?php if($errors->any()): ?>
                <div class="card-footer">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($i); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('products.store')); ?> " enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group text-left">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder=""
                            value="<?php echo e(old('title')); ?>">
                    </div>
                    <div class="form-group text-left">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="2"
                            placeholder="Description" value="<?php echo e(old('description')); ?>"></textarea>
                    </div>
                    <div class="form-group text-left">
                        <label for="price">Price</label>
                        <input type="text" class="form-control col-md-2" id="price" name="price"
                            value="<?php echo e(old('price')); ?>">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="arquivo">Search File</label>
                    </div>
                    <p>
                        <br>
                        <button type="submit" class="btn btn-success my-2">Register new Product</button>
                        <a class="btn my-2" id="cancel" href="/products">
                            <img src="/img/cancel.png">
                        </a>
                    </p>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js">
</script>
<script type="text/javascript">
$(document).ready(function($) {
    var $price = $("#price");
    $price.mask('000000.00', {
        reverse: true
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>