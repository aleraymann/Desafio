@extends('layouts.app')
@section('content')

<div class="card-body">
    <h5 class="card-title">Users</h5>
    <table class="table table-bordered table-hover" id="tableUsers">
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
                    <a href='/user/delete/{{$i->id}}'><img src="/img/delete.png"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection