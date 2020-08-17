<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6 col-md-6">
    <label>Categorie:</label>

    <select class="form-control" name="id_categorie">
        <option disabled selected> Choisissez une categorie</option>
        @foreach($categories as $categorie)

            @if( old('id_categorie') == $categorie->id )

                <option value="{{ $categorie->id }}" selected> {{ $categorie->title_cat }}</option>
            @elseif( !empty($formation) && $formation->id_categorie == $categorie->id)

                <option value="{{ $categorie->id }}" selected> {{ $categorie->title_cat }}</option>
            @else

                <option value="{{ $categorie->id }}"> {{ $categorie->title_cat }}</option>
            @endif
        @endforeach
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date').datetimepicker({
               format: 'YYYY-MM-DD',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', 'Etat:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('etat', 0) !!}
        {!! Form::checkbox('etat', '1', null) !!} Active
    </label>
</div>


<!-- Duree Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duree', 'Duree:') !!}
    {!! Form::number('duree', null, ['class' => 'form-control']) !!}
</div>


<!-- Duree Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix', 'Prix:(en DT)') !!}
    {!! Form::number('prix', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Categorie Field -->
<!-- 
    <div class="form-group col-sm-6">
    {!! Form::label('id_categorie', 'Id Categorie:') !!}
    {!! Form::number('id_categorie', null, ['class' => 'form-control']) !!}
</div> 
-->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.formations.index') }}" class="btn btn-secondary">Cancel</a>
</div>
