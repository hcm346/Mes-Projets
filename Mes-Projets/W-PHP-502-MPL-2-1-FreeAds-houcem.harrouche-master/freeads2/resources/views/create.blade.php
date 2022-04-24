@extends('layouts.app')

@section('content')
<div class="container">
<h1>Déposer une annonce</h1>
<hr>
<form method="POST" action="{{ route('store') }}">
    @csrf
  <div class="form-group">
    <label for="title">Titre de l'annonce</label>
    <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" 
    id="title" aria-describedby="title"  name="title">
    @if ($errors->has('title'))
        <span class="invalid-feeback">{{ $errors->first('title') }}</span>
    @endif
  </div>
  <div class="form-group">
      <label for="description">Description de l'annonce</label>
      <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
      id="description" cols="30" rows="10"></textarea>
      @if ($errors->has('description'))
        <span class="invalid-feeback">{{ $errors->first('description') }}</span>
    @endif
  </div>
  <div class="form-group">
      <label for="localisation">Localisation</label>
    <input type="text" class="form-control {{ $errors->has('localisation') ? 'is-invalid' : '' }} " 
    id="localisation" name="localisation">
    @if ($errors->has('localisation'))
        <span class="invalid-feeback">{{ $errors->first('localisation') }}</span>
    @endif
  </div>
  <div class="form-group">
      <label for="price">Prix</label>
    <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }} " 
    id="price" name="price">
    @if ($errors->has('price'))
        <span class="invalid-feeback">{{ $errors->first('price') }}</span>

    @endif
  </div>
  <!-- grace a blade 
  on peut generer du code html pour les personnes pas co   -->
  @guest
  <hr>
    <h1>Vos Informations</h1>
    <hr>
    <div class="form-group">
      <label for="name">Votre Nom</label>
    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
    id="name" name="name">
    @if ($errors->has('name'))
        <span class="invalid-feeback">{{ $errors->first('name') }}</span>
    @endif
    </div>
    <div class="form-group">
      <label for="email">Votre email</label>
    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" i
    d="email" name="email">
    @if ($errors->has('email'))
        <span class="invalid-feeback">{{ $errors->first('email') }}</span>
    @endif
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" 
    id="password" name="password">
    @if ($errors->has('password'))
        <span class="invalid-feeback">{{ $errors->first('password') }}</span>
    @endif
    </div>
    <div class="form-group">
      <label for="password_confirmation">Confirmation du Mot de passe</label>
    <input type="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" 
    id="password_confirmation" name="password_confirmation">
    @if ($errors->has('password_confirmation'))
        <span class="invalid-feeback">{{ $errors->first('password_confirmation') }}</span>
    @endif
    </div>
  @endguest
  <hr>
  <button type="submit" class="btn btn-primary">Soumettre notre annonce</button>
</form>
</div>
@endsection