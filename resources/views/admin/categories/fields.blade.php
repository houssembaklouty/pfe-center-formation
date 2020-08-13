<!-- Title Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_cat', 'Title Cat:') !!}
    {!! Form::text('title_cat', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_cat', 'Date Cat:') !!}
    {!! Form::text('date_cat', null, ['class' => 'form-control','id'=>'date_cat']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date_cat').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
</div>
