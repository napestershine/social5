@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="text-center">
                        {{ $user->name }}'s profile.
                    </p>
                </div>
                <div class="panel-body">
                    <center>
                        <img src="{{ Storage::url($user->avatar) }}" width="70px" height="70px"
                             style="border-radius: 50%"
                             alt=""/>
                    </center>
                </div>
            </div>
        </div>
    </div>
@stop