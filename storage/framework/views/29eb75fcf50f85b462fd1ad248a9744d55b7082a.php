<?php $__env->startSection('body'); ?>
<div class="card border">
	<div class="card-body">
		<form action="/categorias" method="POST">
			<?php echo csrf_field(); ?>
			<div class="form-group">
				<label for="nomeCategoria"> Nome da Categoria</label>
				<input type="text" name="nomeCategoria" class="form-control" id="nomeCategoria" placeholder="Categoria">
			</div>
			<button type="submit" class="btn btn-primary btn-sn">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sn">Cancelar</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current"=>"categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>