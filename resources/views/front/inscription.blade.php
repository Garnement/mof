@extends('layouts.master')


@section('content')
<div class="container">
  <h1 class="border">Inscription</h1>
  <form method="post" action="">
    <h2>A votre sujet</h2>
    <br/>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control col-md-1" id="exampleInputEmail1" placeholder="Nom">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Prénom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prenom">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Adresse">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Ville</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ville">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Code postal</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Code postal">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Date de naissance</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Date de naissance">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1"> Confirmer votre email</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Confirmer l'email">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Numéro de téléphone</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Numéro de téléphone">
    </div>

    <div class="row">
      <div class="checkbox col-md-6">
        <label>
          <input type="checkbox">Mail ?
        </label>
      </div>

      <div class="checkbox col-md-6">
        <label>
          <input type="checkbox">SMS ?
        </label>
      </div>
    </div>
    <div class="row">

      <div class="checkbox col-md-6">
        <label>
          <input type="checkbox">Mofletter ?
        </label>
      </div>

      <div class="form-group col-md-6">
         <label for="exampleInputFile">Pièce d'identité</label>
         <input type="file" id="exampleInputFile">
         <p class="help-block">10mo max</p>
      </div>
    </div>

    <hr>

    <h2>Au sujet de votre centre de formation</h2>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom de l'etablissement</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Etablissement">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nom du responsable</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom du responsable">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Adresse</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Adresse">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Prénom du responsable</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom du responable">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Ville</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ville">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Code postal</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Code postal">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>

      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Téléphone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Téléphone">
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

    </div> <!-- row diplome -->

    <hr>
    <h2>Au sujet de votre entreprise</h2>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Nom de l'entreprise</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entreprise">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Nom du responsable</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom du responsable">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Adresse</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Adresse">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Prénom du responsable</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom du responable">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Ville</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ville">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Code postal</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Code postal">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Téléphone</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Téléphone">
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
        <button class="btna" type="submit" name="action">Envoi du bois!</button>
      </div>


</div>

  </form>
</div> <!-- container -->






@endsection
