<?php $__env->startSection('body'); ?>
	<div class="jumboltron bg-light border border-secondary">
		<div class="row">
			<div class="card-deck">
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Produtos</h5>
						<p class="card-text">Cadastre seus produtos, 
						mas não antes de cadastrar as Categorias</p>
						<a href="/produtos" class="btn btn-primary">Cadastre seus Produtos</a>
					</div>
				</div>
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Categorias</h5>
						<p class="card-text">Cadastre as categorias de seus produtos</p>
						<a href="/categorias" class="btn btn-primary">Cadastre suas Categorias</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current"=>"home"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>