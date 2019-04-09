@extends('layouts.app')
@section('content')

<div class="card-body" id="app">
    <div>
    <h5>Search Users:
        <form action="/user" method="POST" class="form form-inline">
        @csrf
            <input type="text" name="id" class="form-control" placeholder="ID">
            <input type="text" name="name" class="form-control" placeholder="Name">
            <input type="text" name="city" class="form-control" placeholder="City">
            <input type="text" name="state" class="form-control" placeholder="State">
            <input type="text" name="district" class="form-control" placeholder="District">

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <h5 class="card-title">Registered Users</h5>
    @include('components.flash-message')
    <table class="table table-bordered table-hover col-md-3" id="tableUsers">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Address</th>
                <th>Number</th>
                <th>Complement</th>
                <th>District</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->name}}</td>
                <td>{{$i->email}}</td>
                <td>{{$i->city}}</td>
                <td>{{$i->state}}</td>
                <td>{{$i->postalcode}}</td>
                <td>{{$i->address}}</td>
                <td>{{$i->number}}</td>
                <td>{{$i->complement}}</td>
                <td>{{$i->district}}</td>
                <td>
                    <a href='/user/delete/{{$i->id}}' onclick="return confirm('Confirma Exclusão do Registro?')"><img
                            src="/img/delete.png"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection