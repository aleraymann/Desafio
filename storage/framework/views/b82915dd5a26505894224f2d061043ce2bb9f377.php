<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/auth/register.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><img src="/img/pp.png"><?php echo e(__('Register')); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name"
                                    value="<?php echo e(old('name')); ?>" autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"
                                    value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                    name="password">

                                <?php if($errors->has('password')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('City')); ?></label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right"><?php echo e(__('State')); ?></label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state"
                                    value="<?php echo e(old('state')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="postalcode"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Postal Code')); ?></label>
                            <div class="col-md-6">
                                <input id="postalcode" type="text" class="form-control" name="postalcode"
                                    value="<?php echo e(old('postalcode')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"
                                    value="<?php echo e(old('address')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Number')); ?></label>
                            <div class="col-md-2">
                                <input id="number" type="number" class="form-control" name="number"
                                    value="<?php echo e(old('number')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complement"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Complement')); ?></label>
                            <div class="col-md-6">
                                <input id="complement" type="text" class="form-control" name="complement"
                                    value="<?php echo e(old('complement')); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('District')); ?></label>
                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district"
                                    value="<?php echo e(old('district')); ?>">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
    var $postalcode = $("#postalcode");
    $postalcode.mask('00000-000', {
        reverse: true
    });
    $("#postalcode").focusout(function() {

        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            dataType: 'json',
            success: function(data) {
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#city").val(data.localidade);
                $("#state").val(data.uf);
                $("#address").val(data.logradouro);
                $("#complement").val(data.complemento);
                $("#number").focus();
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>