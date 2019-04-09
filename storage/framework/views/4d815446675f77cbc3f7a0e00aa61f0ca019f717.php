<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/products/products.blade.php */ ?>

<?php $__env->startSection('content'); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Products</title>

<body id="grad1">
    <div class="container text-center">
        <p><a href="/newProduct" class="btn btn-outline-primary">
                <img class="img-fluid" src="/img/addprod.png">
                New Product</a></p>
    </div>
    <div class="container">
        <h5>Search Products:
            <form action="/products" method="POST" class="form form-inline">
                <?php echo csrf_field(); ?>
                <input type="text" name="title" class="form-control" placeholder="Title">

                <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <main class="py-4" id="app">
        <?php echo $__env->make('components.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row container text-center fluid">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="card mb-3 shadow-sm" id="productCard">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/<?php echo e($i->image); ?>">
                    <div class="card-body">
                        <h5 class="card-text"><strong>Title: </strong> <?php echo e($i->title); ?></h5>
                        <h6 class="card-text">
                            <strong>Description:</strong>
                            <?php echo e($i->description); ?>

                        </h6>
                        <h6 class="card-text">
                            <strong>Price:</strong>
                            <?php echo e('R$ '.number_format($i->price, 2, ',', '.')); ?>

                        </h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form method="POST" action="/<?php echo e($i->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Confirma Exclusão do Registro?')">Delete</button>
                                </form>
                                <form method="POST" action="/products/edit/<?php echo e($i->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <a class="btn btn-sm btn-outline-secondary" href='products/edit/<?php echo e($i->id); ?>'>Edit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>