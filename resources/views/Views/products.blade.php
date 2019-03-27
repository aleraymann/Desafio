@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Products</title>

<body>
    <div class="album py-5 bg-light">
        <div class="container text-center">
            <p><a href="/newProduct" class="btn btn-primary">
                    <img class="img-fluid" src="/img/addprod.png">
                    New Product</a></p>
                    @include('components.flash-message')
            <h3>Product's List</h3>
            <div class="row">
                @foreach($products as $i)
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$i->image}}">
                        <div class="card-body">
                            <h5 class="card-text"><strong>Title: </strong> {{$i->title}}</h5>
                            <h6 class="card-text">
                                <strong>Description:</strong>
                                {{$i->description}}
                            </h6>
                            <h6 class="card-text">
                                <strong>Price:</strong>
                                {{'R$ '.number_format($i->price, 2, ',', '.') }}
                            </h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form method="POST" action="/{{$i->id}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                    <form method="POST" action="/products/edit/{{$i->id}}">
                                        @csrf
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href='products/edit/{{$i->id}}'>Edit</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>©2019 @aleraymann</p>
        </div>
    </footer>
</body>

</html>
@endsection