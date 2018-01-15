@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">


                </div>

                <div class="panel-body">

                        <br>


                            <h2 class="badge badge-primary">Usuarios</h2>
                            <p>listado de usuarios</p>
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>NOMBRE</th>

                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                <tr>


                                    <td>{{$user->name}}</td>

                                    <td>{{$user->email}}</td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>



                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
