@extends('layouts.templade')
@section('content')
          <!-- Breadcromb Area Start -->
          <section class="gauto-breadcromb-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>À propos de nous</h3>
                        <ul>
                           <li><i class="fa fa-home"></i></li>
                           <li><a href="{{route('dashboard')}}">Accueil</a></li>
                           <li><i class="fa fa-angle-right"></i></li>
                           <li>A propos</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Breadcromb Area End -->


         <!-- About Page Area Start -->
         <section class="about-page-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="about-page-left">
                        <h4>À propos de nous</h4>
                        <h3>We are committed to provide safe Ride solutions</h3>
                        <p><span>since 2003</span>,Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudi- um lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.litterarum formas humanitatis per seacula quarta decima et quinta decima</p>
                        <div class="about-page-call">
                           <div class="page-call-icon">
                              <i class="fa fa-phone"></i>
                           </div>
                           <div class="call-info">
                              <p>Besoin d'aide?</p>
                              <h4><a href="#">+225 0749123931</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about-page-right">
                        <img src="assets/img/about-page.jpg" alt="about page" />
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- About Page Area End -->


         <!-- About Promo Area Start -->
         <section class="gauto-about-promo section_70">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="about-promo-text">
                        <h3>Faites-nous confiance pour vos besoins de voiture. <span>Louez une voiture</span> Maintenant!</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="about-promo-image">
                        <img src="assets/img/cars.png" alt="about promo" />
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- About Promo Area End -->


         <!-- Promo Area Start -->
         <section class="gauto-promo-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="promo-box-left">
                        <img src="assets/img/toyota-offer-2.png" alt="promo car" />
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="promo-box-right">
                        <h3>Voulez-vous ganger avec nous en tant que chauffeur ou proprietaire de véhicule ?</h3>
                        <a href="#" class="gauto-btn">Faire une demande</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Promo Area End -->
@endsection
