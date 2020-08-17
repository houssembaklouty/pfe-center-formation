@extends('condidat.layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 pb-3">

            <div class="row mt-4">
                @foreach($formations as $formation)
                <div class="col-sm-4">

                    <div class="card bg-light">
                        <div class="card-header">
                            <h4 class="card-title">{{ $formation->title }}</h4>
                            
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Le: {{ $formation->date->format('d-m-Y') }} / {{ $formation->duree }} jour(s).</h6>
                            <p class="card-text"> {{ $formation->description }} </p>
                            <a href="#" class="btn btn-primary">Acheter ({{ $formation->prix }} DT)</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
