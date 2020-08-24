<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $formateur->id }}</p>
</div>

<!-- Nom Cat Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $formateur->nom }}</p>
</div>

<div class="form-group">
    {!! Form::label('prenom', 'prenom:') !!}
    <p>{{ $formateur->prenom }}</p>
</div>

<div class="form-group">
    {!! Form::label('email', 'email:') !!}
    <p>{{ $formateur->email }}</p>
</div>

<div class="form-group">
    {!! Form::label('grade', 'grade:') !!}
    <p>{{ $formateur->grade }}</p>
</div>

<div class="form-group">
    {!! Form::label('specialite', 'specialite:') !!}
    <p>{{ $formateur->specialite }}</p>
</div>

<div class="form-group">
    {!! Form::label('etat', 'etat:') !!}
    <p>{{ $formateur->etat }}</p>
</div>

<div class="form-group">
    {!! Form::label('region', 'region:') !!}
    <p>{{ $formateur->region }}</p>
</div>

<div class="form-group">
    {!! Form::label('tel', 'tel:') !!}
    <p>{{ $formateur->tel }}</p>
</div>