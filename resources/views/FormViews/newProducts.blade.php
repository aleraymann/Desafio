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
</head>

<body class="newprod" id="grad1">
    <main role="main" class="container">
        <section class="container text-center">
            <div class="container">
                <h3>New Product</h3>
                @include('components.errorsRequired')
                <form method="POST" action="{{ route('products.store') }} " enctype="multipart/form-data">
                    @include('components.form')
                </form>
            </div>
        </section>
    </main>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js">
</script>
<script type="text/javascript">
$(document).ready(function($) {
    var $price = $("#price");
    $price.mask('####.##', {reverse: true});
});
</script>
@endsection