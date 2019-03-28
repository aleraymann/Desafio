@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center">
                    <h1><b><i>Welcome</b></i></h1>
                </div>
                <div class="card-body" id="grad2">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="text-center">
                        <img class="img-fluid" src="/img/pp1.png">
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a class=" btn btn-outline-primary col-12" href="/products">
                                    <img src="/img/icon.png"> PRODUCTS</a>
                            </div>
                            <div class="col">
                                <a class=" btn btn-outline-secondary col-12" href="/user">
                                    <img src="/img/user.png"> USERS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img id="slide" src="/img/toasty.png">
        </div>
        @endsection