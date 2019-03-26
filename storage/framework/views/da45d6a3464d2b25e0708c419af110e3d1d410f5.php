<?php $__env->startSection('body'); ?>

<div class="card border">
	<div class="card-body">
		<h5 class="card-title">Cadastro de Produtos</h5>
		<table class="table table-ordered table-hover" id="tabelaProdutos">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Estoque</th>
					<th>Preço</th>
					<th>Categoria</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
	</div>
		<div class="card-footer">
			<a class="btn btn-sm btn-primary" role="button" onclick="novoProduto()"> Novo Produto</a>
		</div>

	<div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="form-horizontal" id="formProduto">
				<div class="modal-header">
					<h5 class="modal-title"> Novo produto</h5>
				</div>
					<div class="modal-body">
						<input type="hidden" name="form-control" id="id">
						<div class="form-group">
							<label for="nomeProduto" class="control-label">Nome do Produto</label>
							<div class="input-group">
								<input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
							</div>
						</div>
						<div class="form-group">
							<label for="precoProduto" class="control-label">Preço</label>
							<div class="input-group">
								<input type="number" class="form-control" id="precoProduto" placeholder="Preco do Produto">
							</div>
						</div>
						<div class="form-group">
							<label for="quantidadeProduto" class="control-label">Quantidade</label>
							<div class="input-group">
								<input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantodade do Produto">
							</div>
						</div>
						<div class="form-group">
							<label for="categoriaProduto" class="control-label">Categoria</label>
							<div class="input-group">
								<select class="form-control" id="categoriaProduto">

								</select>
							</div>
						</div>
					</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
					<button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					
				</div>
				</form>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
	<?php $__env->startSection('javascript'); ?>
	<script type="text/javascript">

	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN':"<?php echo e(csrf_token()); ?>"
		}
	});		
		function novoProduto(){
			$('#id').val('');
			$('#nomeProduto').val('');
			$('#precoProduto').val('');
			$('#quantidadeProduto').val('');
			$('#dlgProdutos').modal('show');
		}
		
		function carregarCategoria(){
			$.getJSON('api/categorias', function(data){
				for(i=0;i<data.length; i++){
					opcao = '<option value="'+ data[i].id + '">'+data[i].nome + '</option>';
					$('#categoriaProduto').append(opcao);
				}
			});
		}

		function montarLinha(produto){
			var linha = "<tr>"+
						"<td>"+ produto.id +"</td>"+
						"<td>"+ produto.nome +"</td>"+
						"<td>"+ produto.estoque +"</td>"+
						"<td>"+ produto.preco +"</td>"+
						"<td>"+ produto.categoria_id +"</td>"+
						"<td>"+
							'<button class="btn btn-primary btn-sm " onclick="editar ('+ produto.id +')"> Editar </button>  '+
							'<button class="btn btn-danger btn-sm" onclick="remover ('+ produto.id +')"> Apagar </button>'+
						"</td>"+
						"</tr>";
						return linha;
		}

		function editar(id){
			$.getJSON('api/produtos/'+ id, function(data){
				console.log(data);
				$('#id').val(data.id);
				$('#nomeProduto').val(data.nome);
				$('#precoProduto').val(data.preco);
				$('#quantidadeProduto').val(data.estoque);
				$('#categoriaProduto').val(data.categoria_id);
				$('#dlgProdutos').modal('show');
			});
		}
		
		function remover(id){
			$.ajax({
				type: "DELETE",
				url: "/api/produtos/"+ id,
				context: this,
				success: function(){
					console.log("Produto Apagado!")
					linhas = $("#tabelaProdutos>tbody>tr");
					e = linhas.filter(function(i, elemento){
						return elemento.cells[0].textContent == id;
					});
					if (e)
						e.remove();
				},
				error: function(error){
					console.log(error);
				}
			});
		}
		function carregarProdutos(){
				$.getJSON('api/produtos', function(produtos){
					for(i=0;i<produtos.length;i++){
						linha = montarLinha(produtos[i]);
						$('#tabelaProdutos>tbody').append(linha);
				}
			});
		}
		function criarProduto(){
			prod = { 
				nome: $("#nomeProduto").val(),
				preco: $("#precoProduto").val(),
				estoque: $("#quantidadeProduto").val(),
				categoria_id:$("#categoriaProduto").val()
			};
			$.post("api/produtos", prod, function(data){
				produto = JSON.parse(data);
				linha = montarLinha(produto);
						$('#tabelaProdutos>tbody').append(linha);
			});
		}
		function salvarProduto(){
			prod = { 
			id: $("#id").val(),	
			nome: $("#nomeProduto").val(),
			preco: $("#precoProduto").val(),
			estoque: $("#quantidadeProduto").val(),
			categoria_id:$("#categoriaProduto").val()
			};
		$.ajax({
				type: "PUT",
				url: "/api/produtos/"+ prod.id,
				context: this,
				data: prod,
				success: function(data){
					prod = JSON.parse(data);
					linhas = $("tabelaProdutos>tbody>tr");
					e = linhas.filter(function(i,e){
						return(e.cells[0].textContent == prod.id);
					});
					if (e) {
						e[0].cells[0].textContent = prod.id;
						e[0].cells[1].textContent = prod.nome;
						e[0].cells[2].textContent = prod.estoque;
						e[0].cells[3].textContent = prod.preco;
						e[0].cells[4].textContent = prod.categoria;
					}
				},

			});
		}

		$("#formProduto").submit(function(event){
			event.preventDefault();
			if ($("#id").val() != '') {
				salvarProduto();
			}
			else{
				criarProduto();
			}
			
			$("#dlgProdutos").modal('hide');
		});
		$(function(){
			carregarCategoria();
			carregarProdutos();
		})
	</script>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', ["current"=>"produtos"], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>