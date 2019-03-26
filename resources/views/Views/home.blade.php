@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center">
                    <h2>Welcome</h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <img class="img-fluid" src="/img/pp.jpg">
                </div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class=" btn btn-primary col-12" href="/products">
                                <img src="/img/icon.png"> PRODUCTS</a>
                        </div>
                        <div class="col">
                            <a class=" btn btn-secondary col-12" href="/user">
                                <img src="/img/user.png"> USERS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img id="slide" src="/img/toasty.png">
</div>
@endsection