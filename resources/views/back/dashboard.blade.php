@extends ('layouts.admin')

@section('content')

Bienvenu du côté admin des MOF BIIIIIITCH

<div class="container">
  <div class="row">Cliquer sur un candidat pour éditer sa fiche
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>N°inscription</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Spécialité</th>
        <th>Médaille</th>
        <th>Statut de l'inscription</th>
      </tr>
      </thead>
      <tbody>
        @foreach($candidates as $candidat)

          <tr>
            <td>{{$candidat->profile->inscription_number ?? ''}}</td>
            <td><a href=" {{ route('candidates.edit', $candidat->id) }} ">{{$candidat->firstName}}</a></td>
            <td><a href=" {{ route('candidates.edit', $candidat->id) }} ">{{$candidat->name}}</a></td>
            <td>{{isset($candidat->speciality->speciality_name) ? $candidat->speciality->speciality_name :''}}</td>
            <td>{{$candidat->medal_id ? $candidat->medal->medal_type  : 'Pas de médailles' }}</td>
            <td>{{isset($candidat->profile->profile_statut) ? $candidat->profile->profile_statut  : 'Incomplète'}}
          </tr>
         @endforeach
       </tbody>
  </table>



</div>

@endsection
