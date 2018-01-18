@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
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

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal_{{$user->id}}">
                                            Edit
                                        </button>
                                        <div class="modal fade" id="exampleModal_{{$user->id}}" tabindex="-1"
                                             role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            User:{{$user->id}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route("users.update",$user->id)}}"
                                                              method="POST"> <!--{{url("users/$user->id")}}-->

                                                            {{csrf_field()}}
                                                            {{method_field('put')}}

                                                            <div class="form-group">
                                                                <label for="exampleInputname1">Name</label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputname1" name="name"
                                                                       placeholder="name" value="{{$user->name}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputmail">Mail</label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputmail" name="email"
                                                                       placeholder="email" value="{{$user->email}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputpassword">Password</label>
                                                                <input readonly="readonly" type="text"
                                                                       class="form-control" id="exampleInputpassword"
                                                                       name="password" placeholder="password"
                                                                       value="{{$user->password}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputage">Age</label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputage" placeholder="age" name="age"
                                                                       value="{{$user->age}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputWeight">Weight</label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputWeight" placeholder="weight"
                                                                       name="weight" value="{{$user->weight}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputHeight">Height</label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputWeight" placeholder="Height"
                                                                       name="height" value="{{$user->height}}">
                                                            </div>


                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <button class="btn btn-primary">Save changes</button>
                                                            </div>

                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>



                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
