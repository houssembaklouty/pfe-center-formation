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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>