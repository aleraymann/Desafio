<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<style type="text/css">
	body{
		padding: 20px;
	}
	.navbar{
		margin-bottom: 20px;
	}
	.row{
		margin-left: 145px;
		padding: 20px;
	}
</style>
<body>
	<div class="container">
		<main role="main">
			<?php $__env->startComponent('component_navbar', ["current"=> $current ]); ?>
			<?php echo $__env->renderComponent(); ?>
			<?php if (! empty(trim($__env->yieldContent('body')))): ?>
				<?php echo $__env->yieldContent('body'); ?>
			<?php endif; ?>
			
		</main>

	</div>
	<script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
	<?php if (! empty(trim($__env->yieldContent('javascript')))): ?>
		<?php echo $__env->yieldContent('javascript'); ?>
	<?php endif; ?>
</body>
</html>