@extends('layouts.templade')
@section('content')


      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="breadcromb-box">
                    <h3>Contactez-nous</h3>
                    <ul>
                       <li><i class="fa fa-home"></i></li>
                       <li><a href="{{route('dashboard')}}">Accueil</a></li>
                       <li><i class="fa fa-angle-right"></i></li>
                       <li>Contact</li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Breadcromb Area End -->


     <!-- Contact Area Start -->
     <section class="gauto-contact-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-lg-7">
                 <div class="contact-left">
                    <h3>Envoyez-nous un message</h3>
                    <form>
                       <div class="row">
                          <div class="col-md-6">
                             <div class="single-contact-field">
                                <input type="text" placeholder="Nom & Prénoms">
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="single-contact-field">
                                <input type="email" placeholder="Email">
                             </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-md-6">
                             <div class="single-contact-field">
                                <select class="form-control" >
                                    <option> Devenir Chauffeur </option>
                                    <option> Proposer sa voiture </option>
                                </select>
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="single-contact-field">
                                <input type="tel" placeholder="Téléphone">
                             </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                             <div class="single-contact-field">
                                <textarea placeholder="Message...."></textarea>
                             </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                             <div class="single-contact-field">
                                <button type="submit" class="gauto-theme-btn"><i class="fa fa-paper-plane"></i> Envoyez</button>
                             </div>
                          </div>
                       </div>
                    </form>
                 </div>
              </div>
              <div class="col-lg-5">
                 <div class="contact-right">
                    <h3>Contact information</h3>
                    <div class="contact-details">
                       <p><i class="fa fa-map-marker"></i> Abidjan, Côte d'Ivoir</p>
                       <div class="single-contact-btn">
                          <h4>Email </h4>
                          <a href="#">info@example.com</a>
                       </div>
                       <div class="single-contact-btn">
                          <h4>Téléphone</h4>
                          <a href="#">+225 0749123931</a>
                       </div>
                       <div class="social-links-contact">
                          <h4>Souvez-nous sur:</h4>
                          <ul>
                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                             {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                             {{-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="#"><i class="fa fa-skype"></i></a></li>
                             <li><a href="#"><i class="fa fa-vimeo"></i></a></li> --}}
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Contact Area End -->

@endsection
