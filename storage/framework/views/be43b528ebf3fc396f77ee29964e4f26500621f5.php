<?php $__env->startSection('body'); ?>
<div class="card border">
	<div class="card-body">
		<form action="/produtos" method="POST">
			<?php echo csrf_field(); ?>
			 <?php                        
$cats = DB::table('categorias')->get();
?>          
			<div class="form-group">
				<label for="nomeProduto"> Nome do Produto</label>
				<input type="text" name="nomeProduto" class="form-control" id="nomeProduto" placeholder="Produto">
				<label for="estoqueProduto"> Estoque do Produto</label>
				<input type="text" name="estoqueProduto" class="form-control" id="estoqueProduto" placeholder="Quantidade">
				<label for="precoProduto"> Preço do Produto</label>
				<input type="text" name="precoProduto" class="form-control" id="precoProduto" placeholder="Valor">
				<label for="categoria_id"> Categoria </label>
				<select class="custom-select" name="categoria_id">
				  <option selected>Selecione uma Categoria</option>
	<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <option value="<?php echo e($c->id); ?>"><?php echo e($c->nome); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-sn">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sn">Cancelar</button>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current"=>"produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>