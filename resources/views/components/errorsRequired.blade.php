@if($errors->any())
<div class="card-footer">
    @foreach($errors->all() as $i)
    <div class="alert alert-danger" role="alert">
        {{$i}}
    </div>
    @endforeach
</div>
@endif