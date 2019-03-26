<?php /* C:\Users\Alessandro\Documents\laravel\login-basico\resources\views/usuario.blade.php */ ?>
<?php if(auth()->guard()->check()): ?>
<h4>Usuário logado:</h4>
<p> <?php echo e(Auth::user()->id); ?></p>
<p> <?php echo e(Auth::user()->name); ?></p>
<p> <?php echo e(Auth::user()->email); ?></p>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
	<h4>Usuário não logado!</h4>

<?php endif; ?>