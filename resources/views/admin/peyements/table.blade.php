<div class="table-responsive-sm">
    <table class="table table-striped" id="peyements-table">
        <thead>
            <tr>
                <th>Mode Payement</th>
        <th>Formation</th>
        <th>Condidat</th>
        <th>Prix</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($peyements as $peyement)
            <tr>
                <td>{{ $peyement->mode_payement }}</td>
            <td>
                <a href="{{ route('admin.peyements.show', $peyement->formation->id) }}">{{ $peyement->formation->title }}</a>
            </td>
            <td>
                <a href="{{ route('admin.condidats.index') }}">
                    {{ $peyement->condidat->nom .''. $peyement->condidat->prenom }} / {{ $peyement->condidat->email  }}
                </a>
              </td>
            <td>{{ $peyement->prix }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.peyements.destroy', $peyement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.peyements.show', [$peyement->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.peyements.edit', [$peyement->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>