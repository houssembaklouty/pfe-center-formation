<div class="table-responsive-sm">
    <table class="table table-striped" id="actualites-table">
        <thead>
            <tr>
                <th>Nom</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($actualites as $actualite)
            <tr>
                <td>{{ $actualite->nom }}</td>
            <td>{{ $actualite->description }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.actualites.destroy', $actualite->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.actualites.show', [$actualite->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.actualites.edit', [$actualite->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>