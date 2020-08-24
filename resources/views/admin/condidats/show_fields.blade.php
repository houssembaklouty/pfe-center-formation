<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $condidat->id }}</p>
</div>

<!-- Nom Cat Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $condidat->nom }}</p>
</div>

<div class="form-group">
    {!! Form::label('prenom', 'prenom:') !!}
    <p>{{ $condidat->prenom }}</p>
</div>

<div class="form-group">
    {!! Form::label('email', 'email:') !!}
    <p>{{ $condidat->email }}</p>
</div>

<div class="form-group">
    {!! Form::label('niveau', 'niveau:') !!}
    <p>{{ $condidat->niveau }}</p>
</div>

<div class="form-group">
    {!! Form::label('etat', 'etat:') !!}
    <p>{{ $condidat->etat }}</p>
</div>

<div class="form-group">
    {!! Form::label('region', 'region:') !!}
    <p>{{ $condidat->region }}</p>
</div>

<div class="form-group">
    {!! Form::label('tel', 'tel:') !!}
    <p>{{ $condidat->tel }}</p>
</div>