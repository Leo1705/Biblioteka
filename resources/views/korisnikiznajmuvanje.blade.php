@extends('_layout.log')

@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="container">
<div>‎ ‎  ‎  ‎  ‎  </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <h2> Сите корисници кои земале книги</h2>
                        <div class="alert alert-success" >
                        <table>
    <thead>
        <tr>
            <th>User's Email</th>
            <th>Book's Name</th>
            <th>Borowed At</th>
            <th>Return At</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($submissions as $submission)
            <tr>
                <td>{{ $submission->feename }}</td>
                <td>{{ $submission->feePrice }}</td>
                <td>{{ $submission->created_at }}</td>
                @php
                        $createdPlusOneWeek = Carbon::parse($submission->created_at)->addWeek();
                    @endphp
                <td> {{ $createdPlusOneWeek->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f2f2f2;
    }
</style>
                        </div>
                        <button><a href="{{route('proces.iznajmuvanje')}}">Add new User</a></button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
