<!-- Mode Payement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_payement', 'Mode Payement:') !!}
    {!! Form::text('mode_payement', null, ['class' => 'form-control']) !!}
</div>

<!-- Formation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formation_id', 'Formation Id:') !!}
    {!! Form::number('formation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Condidat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('condidat_id', 'Condidat Id:') !!}
    {!! Form::number('condidat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix', 'Prix:') !!}
    {!! Form::text('prix', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.peyements.index') }}" class="btn btn-secondary">Cancel</a>
</div>
