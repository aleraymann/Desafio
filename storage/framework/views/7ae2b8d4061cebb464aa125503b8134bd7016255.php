<?php /* C:\Users\Alessandro\Documents\laravel\Desafio2\resources\views/components/editForm.blade.php */ ?>
<?php echo csrf_field(); ?>
<div class="form-group text-left">
    <label for="text">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo e($product->title); ?>">
</div>
<div class="form-group text-left">
    <label for="description">Description</label>
    <input class="form-control" id="description" name="description" value="<?php echo e($product->description); ?>">
</div>
<div class="form-group text-left">
    <label for="price">Price</label>
    <input type="text " step=0.01 class="form-control col-md-2" id="price" name="price" value="<?php echo e($product->price); ?>">
</div>
<div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="arquivo" value="<?php echo e($product->image); ?>"></label>
</div>
<p>
    <br>
    <button type="submit" class="btn btn-success my-2">Save Edit</button>
    <a class="btn btn-secondary my-2" href="/products">Cancel</a>
</p>