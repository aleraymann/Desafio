<?php /* /home/aleraymann/Documentos/laravel/Desafio2/resources/views/components/form.blade.php */ ?>
<?php echo csrf_field(); ?>
<div class="form-group text-left">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="" value="<?php echo e(old('title')); ?>">
</div>
<div class="form-group text-left">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description"
        value="<?php echo e(old('description')); ?>"></textarea>
</div>
<div class="form-group text-left">
    <label for="price">Price</label>
    <input type="text" class="form-control col-md-2" id="price" name="price" value="<?php echo e(old('price')); ?>">
</div>
<div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="arquivo">Search File</label>
</div>
<p>
    <br>
    <button type="submit" class="btn btn-success my-2">Register new Product</button>
    <a class="btn my-2" id="cancel" href="/products">
        <img src="/img/cancel.png">
    </a>
</p>