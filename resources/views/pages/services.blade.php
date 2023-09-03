@extends('layouts.templade')
@section('content')
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="breadcromb-box">
                    <h3>Services</h3>
                    <ul>
                       <li><i class="fa fa-home"></i></li>
                       <li><a href="{{route('dashboard')}}">Accueil</a></li>
                       <li><i class="fa fa-angle-right"></i></li>
                       <li>Services</li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Breadcromb Area End -->
     @include('layouts.partials.services')
@endsection
