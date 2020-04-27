@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @auth
                    <p> You are logged in!</p>
                    @endauth

                    @guest
                    <h2>Please Singin</h2>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection