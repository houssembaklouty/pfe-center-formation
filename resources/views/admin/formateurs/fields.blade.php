<div class="form-group col-sm-6">
    {!! Form::label('nom', 'nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('grade', 'grade:') !!}
    {!! Form::text('grade', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('specialite', 'specialite:') !!}
    {!! Form::text('specialite', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('etat', 'etat:') !!}
    {!! Form::text('etat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('region', 'region:') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('tel', 'tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.formateurs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
