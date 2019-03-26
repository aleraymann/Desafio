<?php /* C:\Users\Alessandro\Documents\laravel\Desafio2\resources\views/FormViews/newProducts.blade.php */ ?>
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
                <?php echo $__env->make('components.errorsRequired', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form method="POST" action="<?php echo e(route('products.store')); ?> " enctype="multipart/form-data">
                    <?php echo $__env->make('components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    $price.mask('#.###,##');
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>