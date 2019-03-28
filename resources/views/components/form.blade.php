@csrf
<div class="form-group text-left">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Product title" value="{{ old('title') }}">
</div>
<div class="form-group text-left">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Product description"
        value="{{ old('description') }}"></textarea>
</div>
<div class="form-group text-left">
    <label for="price">Price</label>
    <input type="text" class="form-control col-md-1" id="price" name="price" value="{{ old('price') }}">
</div>
<div class="form-group text-left">
<label class="form-group text-left" for="file">Image</label>

<div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="arquivo">Click here and choose your image</label>
</div>
</div>
<p>
    <br>
    <button type="submit" class="btn btn-outline-success my-2">Register new Product</button>
    <a class="btn btn-outline-danger" id="cancel" href="/products">
        <img src="/img/cancel.png">
    </a>
</p>