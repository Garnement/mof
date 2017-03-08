<nav class="nav-top">
  <div class="row">
    <div class="col-md-2 col-xs-12">
      <ul class="nav network">
        <li><a href="https://twitter.com/SocieteMOF" class="rs_btn tw"><span>Twitter</span></a></li>
        <li><a href="https://www.facebook.com/meilleursouvriersdefrance" class="rs_btn fb"><span>Facebook</span></a></li>
        <li><a href="https://www.youtube.com/channel/UCY1hSJJ5rU-FSxZJ-cZdSDA" class="rs_btn yt"><span>Youtube</span></a></li>
        <li><a href="https://www.instagram.com/meilleursouvriersdefrance/?hl=fr" class="rs_btn inst"><span>Instagram</span></a></li>
      </ul>
    </div><!--SPRITES NETWORK TOP-->

    <div class="col-md-6 col-xs-12">
      <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Rechercher">
          </div>
          <a href="" class="search"><span>search</span></a>
      </form>
    </div><!--SEARCH-->

    <div class="col-md-4 col-xs-12 flex_connexion">
      <div class="connexion">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span><p data-toggle="modal" data-target="#myModal">Se connecter</p>
      </div>
      <div class="connexion">
      <span class="glyphicon glyphicon-heart" aria-hidden="true"></span><p>Soutenez-nous</p>
      </div>
    </div><!--CONNEXION-->
    </div><!--fin du ROW-->
</nav>

<nav class="navbar navbar-default">
  <div class="row">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav col-md-12">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Métiers</a>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu col" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Snmof <span class="glyphicon glyphicon-menu-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Notre histoire</a></li>
            <li><a href="#">Esprit MOF</a></li>
            <li><a href="#">Mot du président</a></li>
            <li><a href="#">Organigramme</a></li>
            <li><a href="#">Utilisation logo MOF</a></li>
            <li><a href="#">Partenaires</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actualités <span class="glyphicon glyphicon-menu-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Le MAG</a></li>
            <li><a href="#">On parle de nous</a></li>
            <li><a href="#">Lauréats</a></li>
            <li><a href="#">événements</a></li>
            <li><a href="#">musées et ateliers</a></li>
          </ul>
        </li>


        <div class=""><img id="logo" src="img/logo-mof.png" width="172" height="178"></div>


        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">concours maf <span class="glyphicon glyphicon-menu-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">inscription</a></li>
            <li><a href="#">espace candidat</a></li>
            <li><a href="#">métiers et sujets</a></li>
            <li><a href="#">agenda épreuves</a></li>
            <li><a href="#">annuaire</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">espace adhérent <span class="glyphicon glyphicon-menu-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">mof/maf</a></li>
            <li><a href="#">organisateur</a></li>
            <li><a href="#">partenaires</a></li>
            <li><a href="#">ambassadeur</a></li>
            <li><a href="#">emploi</a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">parrainage</a>
        </li>
      </ul>
    </div><!--fin navbar-collapse-->
  </div><!--fin containerfluid-->
</nav><!--DROPDOWN MENU-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
          <p>Première visite ?</p>
          <p>Bonjour cher(e) inconnu(e), on ne se connaît pas ...</p>
          <p>Aucun problème, c'est juste en dessous !</p>
          <a href="{{route('inscription')}}" class="btna">Créer mon compte</a>
        </div>
        <div class="col-md-6">
          <p>On se connaît ?</p>
          <div class="container">
            <div class="row">
            <form class="col s12 center-align" action="{{route('login')}}" method="post">
              {{csrf_field()}}
              <div class="row">
                <div class="input-field col s12 center-align">
                  <input id="email" type="email" class="validate" name="email">
                  <label for="email">ID ou Email</label>
                  @if($errors->has('email')) <span>{{$errors->first('email')}}</span>@endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12 center-align">
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">Mot de passe</label>
                  @if($errors->has('password'))<span>{{$errors->first('password')}}</span>@endif
                </div>
              </div>
              <div class="row">
                <input type="checkbox" name="memorize" id="indeterminate-checkbox" />
                <label for="indeterminate-checkbox">Rester connecté</label>
              </div>

              <div class="row">
                <button class="btna" type="submit" name="action">Connexion
                </button>
            </form>
            </div>

          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


<div class="row text-center">
  <a class="btna col-md-1" href="{{route('home')}}">Home</a>
  <a class="btna col-md-1 col-md-offset-1" href="{{route('inscription')}}">Formulaire</a>
</div>
