<div class="table-responsive-sm">
    <table class="table table-striped" id="formateurs-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Region</th>
                <th>Grade</th>
                <th>Specialite</th>
                <th>Etat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($formateurs as $formateur)
            <tr>
                <td>{{ $formateur->nom }}</td>
                <td>{{ $formateur->prenom }}</td>
                <td>{{ $formateur->email }}</td>
                <td>{{ $formateur->region }}</td>
                <td>{{ $formateur->grade }}</td>
                <td>{{ $formateur->specialite }}</td>
                <td>
                    @if($formateur->etat == 1) Active
                    @else Compte désactiver
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['admin.formateurs.destroy', $formateur->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.formateurs.show', [$formateur->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.formateurs.edit', [$formateur->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>