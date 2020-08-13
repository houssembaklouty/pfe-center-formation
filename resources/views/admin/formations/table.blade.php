<div class="table-responsive-sm">
    <table class="table table-striped" id="formations-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Etat</th>
        <th>Duree</th>
        <th>Categorie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($formations as $formation)
            <tr>
                <td>{{ $formation->title }}</td>
            <td>{{ $formation->description }}</td>
            <td>{{ $formation->date }}</td>
            <td>{{ $formation->etat }}</td>
            <td>{{ $formation->duree }}</td>
            <td>{{ $formation->categorie->title_cat }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.formations.destroy', $formation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.formations.show', [$formation->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.formations.edit', [$formation->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>