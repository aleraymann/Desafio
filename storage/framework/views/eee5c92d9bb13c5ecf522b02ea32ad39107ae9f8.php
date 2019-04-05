<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/Views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-6 fluid">
            <div class="card">
                <div class="card-header  text-center">
                    <h1><b><i>Welcome</b></i></h1>
                </div>
                <div class="card-body" id="grad2">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="text-center fluid">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img class="img-fluid" src="/img/pp.jpg">
                                </div>
                                <div class="flip-box-back">
                                    <br>
                                    <h2><b><i>Let's Grow</b></i></h2>
                                    <p><b><a href="http://www.letsgrow.com.br" target="blank">Let's Grow</a> passionate about
                                            what she does, and why she does it with excellence, with affection and
                                            competence.</b></p>
                                    <p><b>All this passion makes it different in the market.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a class=" btn btn-outline-primary col-12" href="/products">
                                    <img src="/img/icon.png"> PRODUCTS</a>
                            </div>
                            <div class="col">
                                <a class=" btn btn-outline-secondary col-12" href="/user">
                                    <img src="/img/user.png"> USERS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img id="slide" src="/img/toasty.png">
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>