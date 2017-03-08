@extends('layouts.admin')


@section('content')
<a href="{{route('candidates.index')}}">Dashboard</a>
<h1 class="border">Page d'édition du candidat</h1>

<div class="container">
  <form method="post" action="">
    <h2>A votre sujet</h2>
    <br/>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Prenom</label>
        <input type="text" class="form-control col-md-1" id="exampleInputEmail1" value="{{$candidat->firstName}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$candidat->name}}">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$candidat->profile->profile_address}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Ville</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$candidat->profile->profile_city}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Code postal</label>
        <input type="number" class="form-control" id="exampleInputEmail1" value="{{$candidat->profile->profile_zip_code}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Date de naissance</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$candidat->profile->profile_birthdate}}">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$candidat->email}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Téléphone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$candidat->profile->profile_phone}}">
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-12">
      <p>Le candidat souhaite recevoir des informations par :</p>
    </div>
    <div class="row form-inline">
      <div class="checkbox col-md-4">
        <label>
          <input type="checkbox">Mail ?
        </label>
      </div>

      <div class="checkbox col-md-4">
        <label>
          <input type="checkbox" checked>SMS ?
        </label>
      </div>

      <div class="checkbox col-md-4">
        <label>
          <input type="checkbox">Mofletter ?
        </label>
      </div>
    </div>
      <div class="form-group col-md-4">
         <label for="exampleInputFile">Pièce d'identité</label>
         <input type="file" id="exampleInputFile">
         <p class="help-block">10mo max</p>
      </div>
    </div>

    <hr>

    <h2>Au sujet de votre centre de formation</h2>
    @foreach($establishments as $establishment)
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom de l'etablissement</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_name}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom du responsable</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_manager_lastName}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_address}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Prénom du responsable</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_manager_firstName}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Ville</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_city}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Code postal</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_zip_code}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_email}}">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Téléphone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$establishment->establishment_phone}}">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="checkbox col-md-3">
          <label>
            <input type="checkbox">CAP/BEP
          </label>
        </div>

        <div class="checkbox col-md-3">
          <label>
            <input type="checkbox">Bac Pro
          </label>
        </div>

        <div class="checkbox col-md-3">
          <label>
            <input type="checkbox">Bac
          </label>
        </div>

        <div class="checkbox col-md-3">
          <label>
            <input type="checkbox">Aucun
          </label>
        </div>

      </div>
      <div class="form-group col-md-6">
         <label for="exampleInputFile">Attestation</label>
         <input type="file" id="exampleInputFile">
         <p class="help-block">10mo max</p>
      </div>

    </div>

    <div class="row">
      <h4 class="text-center">Diplome en préparation</h4>
      <div class="checkbox col-md-2">
        <label>
          <input type="radio">CAP/BEP
        </label>
      </div>

      <div class="radio col-md-2">
        <label>
          <input type="radio">Bac Pro
        </label>
      </div>

      <div class="radio col-md-2">
        <label>
          <input type="radio">Terminale
        </label>
      </div>

      <div class="radio col-md-2">
        <label>
          <input type="radio">Premiere
        </label>
      </div>

      <div class="radio col-md-2">
        <label>
          <input type="radio">BTM
        </label>
      </div>

      <div class="radio col-md-2">
        <label>
          <input type="radio">BPA
        </label>
      </div>
      @endforeach
    </div> <!-- row diplome -->

    <hr>
    <h2>Au sujet de votre entreprise</h2>
    @foreach($companies as $company)
      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Nom de l'entreprise</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_name}}">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Nom du responsable</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_manager_lastName}}">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Adresse</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_address}}">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Prénom du responsable</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_manager_firstName}}">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Ville</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_city}}">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Code postal</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_zip_code}}">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_email}}">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Téléphone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$company->company_name}}">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4 col-md-offset-6">
           <label for="exampleInputFile">Téléverser votre contrat</label>
           <input type="file" id="exampleInputFile">
           <p class="help-block">10mo max bich, c'est pour moi !</p>
        </div>
      </div>
      <div class="row text-center">
        <button class="btna" type="submit" name="action">Mettre à jour la fiche</button>
      </div>
      @endforeach
</div>

  </form>
</div> <!-- container -->
@endsection
