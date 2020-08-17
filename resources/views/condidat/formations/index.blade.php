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
                            <h6 class="card-title text-left">
                                Le: {{ $formation->date->format('d-m-Y') }}
                                <div class="text-right">
                                    {{ $formation->duree }} jour(s)
                                </div>
                            </h6>
                            <p class="card-text text-justify mt-3"> {{ $formation->description }} </p>
                            <a href="#" class="btn btn-primary">Acheter ({{ $formation->prix }} DT)</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{ $formations->links() }}
    </div>
</div>
@endsection
