<?php /* C:\Users\Alessandro\Documents\laravel\Desafio2\resources\views/editProducts.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Edit Product</title>
</head>

<body class="newprod">
    <div class="card border">
        <a class="btn btn-sm btn-primary" role="button" href="/home">
            <img src="/img/home.png"> HOME
        </a>
    </div>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <form method="POST" action="/products/<?php echo e($product->id); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group text-left">
                        <label for="text">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo e($product->title); ?>">
                    </div>
                    <div class="form-group text-left">
                        <label for="description">Description</label>
                        <input class="form-control" id="description" name="description"
                            value="<?php echo e($product->description); ?>">
                    </div>
                    <div class="form-group text-left">
                        <label for="price">Price</label>
                        <input type="text" class="form-control col-md-2" id="price" name="price"
                            value="<?php echo e($product->price); ?>">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="arquivo" value="<?php echo e($product->image); ?>"></label>
                    </div>
                    <p>
                        <br>
                        <button type="submit" class="btn btn-success my-2">Save Edit</button>
                        <a class="btn btn-secondary my-2" href="/products">Cancel</a>
                    </p>
                </form>
            </div>
        </section>
    </main>
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