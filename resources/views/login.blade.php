@extends('layouts.templade')
@section('content')


      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="breadcromb-box">
                    <h3>Connexion</h3>
                    <ul>
                       <li><i class="fa fa-home"></i></li>
                       <li><a href="{{route('dashboard')}}">Accueil</a></li>
                       <li><i class="fa fa-angle-right"></i></li>
                       <li>Connexion</li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Breadcromb Area End -->


     <!-- Login Area Start -->
     <section class="gauto-login-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="login-box">
                    <div class="login-page-heading">
                       <i class="fa fa-key"></i>
                       <h3>connexion</h3>
                    </div>
                    <form>
                       <div class="account-form-group">
                          <input type="text" placeholder="Username or Email" name="username">
                          <i class="fa fa-user"></i>
                       </div>
                       <div class="account-form-group">
                          <input type="password" placeholder="Password" name="password">
                          <i class="fa fa-lock"></i>
                       </div>
                       <div class="remember-row">
                          <p class="lost-pass">
                             <a href="#">Mot de passe oublié?</a>
                          </p>
                          <p class="checkbox remember">
                             <input class="checkbox-spin" type="checkbox" id="Freelance">
                             <label for="Freelance"><span></span>Restez connecté</label>
                          </p>
                       </div>
                       <p>
                          <button type="submit" class="gauto-theme-btn">se connecter</button>
                       </p>
                    </form>
                    <div class="login-sign-up">
                       <a href="register.html">S'inscrire?</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Login Area End -->


@endsection
