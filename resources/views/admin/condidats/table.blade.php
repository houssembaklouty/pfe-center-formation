<div class="table-responsive-sm">
    <table class="table table-striped" id="condidats-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Region</th>
                <th>Niveau</th>
                <th>Etat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($condidats as $condidat)
            <tr>
                <td>{{ $condidat->nom }}</td>
                <td>{{ $condidat->prenom }}</td>
                <td>{{ $condidat->email }}</td>
                <td>{{ $condidat->region }}</td>
                <td>{{ $condidat->niveau }}</td>
                <td>
                    @if($condidat->etat == 1) Active
                    @else Compte désactiver
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['admin.condidats.destroy', $condidat->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.condidats.show', [$condidat->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.condidats.edit', [$condidat->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>