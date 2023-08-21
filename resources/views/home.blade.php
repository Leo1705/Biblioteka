@extends('_layout.log')

@section('content')
<div class="container">
<div>‎ ‎  ‎  ‎  ‎  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br/>
                    <button><a href="{{route('proces.iznajmuvanje')}}">Add a new User</a></button>
                    <button><a href="{{route('korisnik.iznajmuvanje')}}">See all Users</a></button>
                </div>

            </div>
           
        </div>
    </div>
</div>
@endsection
