<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $formation->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $formation->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $formation->description }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $formation->date }}</p>
</div>

<!-- Etat Field -->
<div class="form-group">
    {!! Form::label('etat', 'Etat:') !!}
    <p>{{ $formation->etat }}</p>
</div>

<!-- Duree Field -->
<div class="form-group">
    {!! Form::label('duree', 'Duree:') !!}
    <p>{{ $formation->duree }}</p>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{{ $formation->prix }}</p>
</div>

<!-- Id Categorie Field -->
<div class="form-group">
    {!! Form::label('id_categorie', 'Categorie:') !!}
    <p>{{ $formation->categorie->title_cat }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $formation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $formation->updated_at }}</p>
</div>

