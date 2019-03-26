<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card-header">Home</div>
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                   <div class="card-body">
                         <h5 class="card-title">Product Register</h5>
                            <a href="/products" class="btn btn-primary">Register</a>
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>