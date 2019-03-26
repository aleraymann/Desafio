@csrf
<div class="form-group text-left">
    <label for="text">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
</div>
<div class="form-group text-left">
    <label for="description">Description</label>
    <input class="form-control" id="description" name="description" value="{{$product->description}}">
</div>
<div class="form-group text-left">
    <label for="price">Price</label>
    <input type="text " step=0.01 class="form-control col-md-2" id="price" name="price" value="{{$product->price}}">
</div>
<div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="arquivo" value="{{$product->image}}"></label>
</div>
<p>
    <br>
    <button type="submit" class="btn btn-success my-2">Save Edit</button>
    <a class="btn btn-secondary my-2" href="/products">Cancel</a>
</p>