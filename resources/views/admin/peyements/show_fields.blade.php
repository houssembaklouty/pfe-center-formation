<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $peyement->id }}</p>
</div>

<!-- Mode Payement Field -->
<div class="form-group">
    {!! Form::label('mode_payement', 'Mode Payement:') !!}
    <p>{{ $peyement->mode_payement }}</p>
</div>

<!-- Formation Id Field -->
<div class="form-group">
    {!! Form::label('formation_id', 'Formation Id:') !!}
    <p>{{ $peyement->formation_id }}</p>
</div>

<!-- Condidat Id Field -->
<div class="form-group">
    {!! Form::label('condidat_id', 'Condidat Id:') !!}
    <p>{{ $peyement->condidat_id }}</p>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{{ $peyement->prix }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $peyement->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $peyement->updated_at }}</p>
</div>

