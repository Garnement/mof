@extends('layouts.master')

@section('content')
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
      <label for="indeterminate-checkbox">Se souvenir de moi ?</label>
    </div>

    <div class="row">
      <button class="btna" type="submit" name="action">Connexion
      </button>
  </form>
</div>

</div>
</div>
@endsection
