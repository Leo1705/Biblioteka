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
                    <form>
                        <label>Избери корисник кој изнајмува книга</label>
                        <br/>
                        <select>
                        <option value="{{ Auth::user()->email }}">{{ Auth::user()->email }}</option>

</select>
                    <!-- <!-- </form> -->
                    <h2>Books:</h2>
<ul>
    
</ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
