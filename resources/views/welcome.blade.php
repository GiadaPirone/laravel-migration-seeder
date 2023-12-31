@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4">
        <div class="col d-flex flex-wrap">
            @foreach ($trains as $train)
            <div class="card m-3 " style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title">{{$train ->azienda}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Da: {{$train ->stazione_partenza}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Arrivo: {{$train ->stazione_arrivo}}</h6>
                  <p class="card-text">OrarioP: {{$train ->orario_partenza}}</p>
                  <p class="card-text">OrarioA: {{$train ->orario_arrivo}}</p>
                  <p class="card-text">CD Train: {{$train ->codice_treno}}</p>
                  <p class="card-text">Data Partenza: {{$train ->data_partenza}}</p>
                  
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

</div>
@endsection