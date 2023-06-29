@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            @foreach ($trains as $train)
            <p>{{$trai ->azienda}}</p>
                
            @endforeach
            <div>
                
            </div>
        </div>
    </div>

</div>
@endsection