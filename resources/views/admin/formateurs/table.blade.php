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
            </tr>
        @endforeach
        </tbody>
    </table>
</div>