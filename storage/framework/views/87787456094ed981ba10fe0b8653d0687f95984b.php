<?php $__env->startSection('body'); ?>

<div class="card border">
	<div class="card-body">
		<h5 class="card-title">Cadastro de Categorias</h5>
<?php if(count($cats) > 0): ?>
		<table class="table table-ordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
	<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($cat->id); ?></td>
					<td><?php echo e($cat->nome); ?></td>
					<td>
						<a href="/categorias/editar/<?php echo e($cat->id); ?>"class="btn btn-sm btn-primary" >Editar</a>
						<a href="/categorias/apagar/<?php echo e($cat->id); ?>"class="btn btn-sm btn-danger" >Apagar</a>
					</td>
				</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>				
			</tbody>
		</table>
<?php endif; ?>
	</div>
	<div class="card-footer">
		<a href="/categorias/novo" class="btn btn-sm btn-secondary" role="button"> Nova Categoria</a>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current"=>"categorias"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>